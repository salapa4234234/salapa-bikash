<!-- <div class="container">
   <div class="">
      <?php
        
            if(isset($_GET['view'])){
                $view=$obj->htmlchar($_GET['view']);
				$view=base64_decode(urldecode($view));
            }
            else{
                $view="";
            }
            
            if($view==""){
				$res=$obj->select("select distinct category from 
				tbl_gallery_category where category='Image Gallery'");
				while($da=mysqli_fetch_assoc($res)){
					$category=$da['category'];
		?>
      <div class="">
         <div class="">
            <a href="main/<?php
                    if($category=="Video Gallery"){
                        echo base64_encode("videogallery");
                    }else if($category=="Audio Gallery"){
                        echo base64_encode("audiogallery");
                    }
                    else{
                        echo base64_encode("gallery");
                    }
                ?>" style="color:#058100; text-decoration:none;">
               <h3
                  style="margin:20px 0px; font-size:2em; font-weight:bold; text-transform:uppercase; line-height:35px;">
                  <?php echo $category; ?>
               </h3>
            </a>
            <div class="clearfix"></div>
         </div>

         <?php
			$result=$obj->select("SELECT distinct id, gallery_name 
			FROM tbl_gallery_category where status=1 
			and category='$category' and del=1 order by id desc");
			$a=0;
			while($data=mysqli_fetch_assoc($result))					
				{
					$gallery_id=$data['id'];
					$resu=$obj->select("select * from tbl_gallery 
					where parent='$gallery_id' 
					and status=1 and del=1 order by id desc");
					$dat=mysqli_fetch_assoc($resu);
					$num=mysqli_num_rows($resu);
                        
        ?>
         <div class="" style="text-align:center; 
                float:left; padding:5px;">
            <div style="background:#39C; text-align:center; 
                    padding:5px 10px; border-radius:5px;">
               <a href="galleries/<?php 
					echo base64_encode($topic)."/".base64_encode($gallery_id); ?>"
                  style="color:#FFF; text-decoration:none; font-size:0.9em;">
                  <h3 style="font-size:0.9em; margin:5px 0px; 
                        color:#FFF;"><?php echo $data['gallery_name'];?></h3>
                  <?php
                            if($dat['image']!=""){
                                if($category=="Image Gallery"){
                        ?>
                  <img src="images/gallery_images/<?php echo $dat['image'] ?>" title="<?php echo $dat['title']; ?>"
                     style="width:90px; 
                        border-radius:5px; height:90px; margin-left:4px;">
                  <?php
                                }
                                else if($category=="Video Gallery"){
                        ?>
                  <video height="90" controls style="max-width:100%;">
                     <source src="images/gallery_images/<?php 
							echo $dat['image'];?>">
                  </video>
                  <?php
                                }
                                else{
                        ?>
                  <audio height="90" controls style="max-width:100%;">
                     <source src="images/gallery_images/<?php
                            echo $dat['image'];?>">
                  </audio>
                  <?php
                                }
                            }
                            else{
                        ?>
                  <img src="them_img/image.png" title="<?php echo $dat['title']; ?>" style="width:90px; 
                        border-radius:5px; height:90px; margin-left:4px;">
                  <?php
                            }
                        ?><br>
                  <?php echo $num; 
                        if($category=="Image Gallery") echo "- Images";
                        if($category=="Video Gallery") echo "- Videos";
                        if($category=="Audio Gallery") echo "- Audio";
                        
                        ?>
               </a>
               <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
         </div>
         <?php
				}
		?>

         <div class="clearfix"></div>
      </div>
      <//?php
				}
            }
            else{
                include('gallery/index.php');
            }
        ?>
      <div class="clearfix"></div>
   </div>
   <div class="clearfix"></div>
</div> -->
<style>
.g-cards {
   display: flex;
   flex-wrap: wrap;
   gap: 0.5rem;
   max-width: 100%;
   margin: 0 auto;
   margin-top: 2rem;
   justify-content: center;
   margin-bottom: 2rem;
}

.gcard {
   position: relative;
   overflow: hidden;
   max-width: 28rem;
   width: 100%;
   color: #fff;
   background: #000;
   cursor: pointer;
   transition: all 0.3s ease;
}

.gcard img {
   max-width: 100%;
   object-fit: cover;
   backface-visibility: hidden;
   vertical-align: top;
   transition: all 0.3s ease;
}

.corner::before,
.corner::after {
   position: absolute;
   content: "";
   background: #fff;
   z-index: 1;
   opacity: 0;
   transition: all 0.4s ease;
}

.right-top::before,
.right-top::after {
   top: 1rem;
   right: 1rem;
}

.right-bottom::before,
.right-bottom::after {
   bottom: 1rem;
   right: 1rem;
}

.left-bottom::before,
.left-bottom::after {
   bottom: 1rem;
   left: 1rem;
}

.left-top::before,
.left-top::after {
   top: 1rem;
   left: 1rem;
}

.corner::before {
   width: 0;
   height: 1px;
}

.corner::after {
   height: 0;
   width: 1px;
}

.gcard figcaption {
   position: absolute;
   text-align: center;
   top: 50%;
   left: 50%;
   max-width: 20rem;
   width: 100%;
   transform: translateY(-50%) translateX(-50%)
}

.gcard h3 {
   font-size: 2.1rem;
   font-weight: bold;
   opacity: 0;
   margin-bottom: 0.5rem;
   letter-spacing: 0.1rem;
   transition: all 0.4s ease;
}

.gcard p {
   color: #fff;
   opacity: 0;
   font-size: 1.1rem;
   transition: all 0.5s ease;
}

.gcard:hover img {
   zoom: 1;
   filter: alpha(opacity=20);
   opacity: 0.3;
}

.gcard:hover .corner::before {
   width: 40px;
   opacity: 1;
   transition-delay: 0.2s;
}

.gcard:hover .corner::after {
   height: 40px;
   opacity: 1;
   transition-delay: 0.2s
}

.gcard:hover h3 {
   opacity: 1;
   transition-delay: 0.3s
}

.gcard:hover p {
   opacity: 1;
   transiton-delay: 0.35s;
}

.gallery-title {
   font-size: 3.5rem;
   font-weight: 600;
   color: green;
   text-align: center;
   margin-top: 5rem;
   margin-top: 3rem;
}
</style>
<div class="container">
   <h1 class="gallery-title">
      Gallery of SBBL
   </h1>
   <div class="g-cards" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
      <figure class="gcard">
         <div class="corner left-top"></div>
         <div class="corner left-bottom"></div>
         <div class="corner right-top"></div>
         <div class="corner right-bottom"></div>
         <img src="http://localhost/salapa/images/gallery_images/1-25-Mar-21-12-03-14staff1.jpg" alt="">
         <figcaption>
            <h3>Staff</h3>
            <p>2024 AGM of photos</p>
         </figcaption>
      </figure>
      <figure class="gcard">
         <div class="corner left-top"></div>
         <div class="corner left-bottom"></div>
         <div class="corner right-top"></div>
         <div class="corner right-bottom"></div>
         <img src="http://localhost/salapa/images/gallery_images/0-25-Mar-21-12-03-13staff.jpg" alt="">
         <figcaption>
            <h3>Staff</h3>
            <p>2024 AGM of photos</p>
         </figcaption>
      </figure>
      <figure class="gcard">
         <div class="corner left-top"></div>
         <div class="corner left-bottom"></div>
         <div class="corner right-top"></div>
         <div class="corner right-bottom"></div>
         <img src="https://salapabikasbank.com.np/images/gallery_images/0-25-Mar-21-12-03-36program4.jpg" alt="">
         <figcaption>
            <h3>Staff</h3>
            <p>2024 AGM of photos</p>
         </figcaption>
      </figure>
      <figure class="gcard">
         <div class="corner left-top"></div>
         <div class="corner left-bottom"></div>
         <div class="corner right-top"></div>
         <div class="corner right-bottom"></div>
         <img src="http://localhost/salapa/images/gallery_images/1-25-Mar-21-12-03-14staff1.jpg" alt="">
         <figcaption>
            <h3>Staff</h3>
            <p>2024 AGM of photos</p>
         </figcaption>
      </figure>
   </div>
   <?php
				}
            }
            else{
                include('gallery/index.php');
            }
        ?>
   <div class="clearfix"></div>
   <div class="clearfix"></div>
</div>