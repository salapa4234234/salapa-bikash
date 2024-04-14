<div class="container">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
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
       <div class="gall"> 	
			<div class="title">
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
                <h3 style="margin:20px 0px; font-size:2em; font-weight:bold; text-transform:uppercase; line-height:35px;">
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
                <div class="col-lg-3" style="text-align:center; 
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
                        <img src="images/gallery_images/<?php echo $dat['image'] ?>" 
                        title="<?php echo $dat['title']; ?>" style="width:90px; 
                        border-radius:5px; height:90px; margin-left:4px;">
                        <?php
                                }
                                else if($category=="Video Gallery"){
                        ?>
                        <video  height="90" controls style="max-width:100%;">
                            <source src="images/gallery_images/<?php 
							echo $dat['image'];?>" >
                        </video>
                        <?php
                                }
                                else{
                        ?>
                        <audio  height="90" controls style="max-width:100%;">
                            <source src="images/gallery_images/<?php
                            echo $dat['image'];?>" >
                        </audio>
                        <?php
                                }
                            }
                            else{
                        ?>
                        <img src="them_img/image.png" 
                        title="<?php echo $dat['title']; ?>" style="width:90px; 
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
        <?php
				}
            }
            else{
                include('gallery/index.php');
            }
        ?>
            <div class="clearfix"></div>
</div>
            <div class="clearfix"></div>
            </div>