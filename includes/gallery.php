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
			$result=$obj->select("SELECT distinct * 
			FROM tbl_gallery_category where status=1 
			and category='Image Gallery' and del=1 order by id desc");
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
            <a href="galleries/<?php 
					echo base64_encode($topic)."/".base64_encode($gallery_id); ?>">
               <figure class="gcard">
                  <div class="corner left-top"></div>
                  <div class="corner left-bottom"></div>
                  <div class="corner right-top"></div>
                  <div class="corner right-bottom"></div>
                  <img src="images/gallery_images/<?php echo $dat['image']; ?>" alt="">
                  <figcaption>
                     <h3><?php echo $data['gallery_name']; ?></h3>
                     <p><?php echo $data['dates']; ?></p>
                  </figcaption>
               </figure>
            </a>
         <?php 
               }
            }
         }
            else{
               include('gallery/index.php');
           }
         ?>
   </div>
   <div class="clearfix"></div>
</div>