<?php
	if(isset($_GET['view'])){
		$gallery_id=$obj->htmlchar($_GET['view']);
		$gallery_id=base64_decode(urldecode($gallery_id));
	}
	else{
		$view="";
	}
?>
	
	<style type="text/css">
		#vlightbox1 img{ height:120px; max-width:100%; border-radius:5px;}
		.videos{ height:150px; max-width:100%; background:#333;}
		.audios{max-width:100%; background:#333; background:#333;}
			
	</style>
    <!-- Start VisualLightBox.com HEAD section -->
    <link rel="stylesheet" type="text/css" href="gallery/vlb_files1/vlightbox1.css"/>
    <link rel="stylesheet" href="gallery/vlb_files1/visuallightbox.css" type="text/css" media="screen" />
    <script src="gallery/vlb_engine/jquery.min.js" type="text/javascript"></script>
    <script src="gallery/vlb_engine/visuallightbox.js" type="text/javascript"></script>
    <!-- End VisualLightBox.com HEAD section -->
    <!-- Start VisualLightBox.com BODY section id=1 -->
    
		<div class="title"><h2>Gallery</h2></div>
        
    <div style="width:100%; height:30px; margin:10px 0px;">
    	<button onclick="goBack()" style="border:none; background:#F00; color:#FFF; line-height:35px; 
        font-size:0.9em; cursor:pointer; padding:0px 10px;">&laquo; Go Back</button>
		<script>
            function goBack(){
                window.history.back()
            }
        </script>
    </div>
	<div id="vlightbox1">
    	
            	<?php
					$res=$obj->select("select category from tbl_gallery_category 
					where id='$gallery_id'");
					$da=mysqli_fetch_assoc($res);
					
					$qry="SELECT * FROM tbl_gallery where parent='$gallery_id' 
					and status=1 and del='1' order by id desc";
					$result=$obj->select($qry);
					while($data=mysqli_fetch_assoc($result))					
						{
							
					if($da['category']=="Image Gallery"){
				?>
                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" 
                style="padding:10px 5px;">
                	
                        <a class="vlightbox1" href="images/gallery_images/<?php 
						echo $data['image'];?>"
                        title="<?php echo $data['title'];?>">
                            <img src="images/gallery_images/<?php echo 
							$data['image'];?>" 
                            alt="<?php echo $data['title'];?>"/>
                        </a>
				</div>
				<?php
						}
					else if($da['category']=="Video Gallery"){
				?>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" >
                    <h2 style="font-size:0.9em; color:#069; 
                    border-bottom:#069 1px dotted; line-height:30px;">
                        <span class="glyphicon glyphicon-film"
                        style="padding-right:10px;"></span>
                        <?php echo $data['title']; ?>
                    </h2>
                    <video controls class="videos">
                        <source src="images/gallery_images/<?php
						echo $data['image'];?>" >
                    </video>
                </div>
				<?php
					}
					else if($da['category']=="Audio Gallery"){
				?>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" 
                style="padding:10px 5px;">
                            <p style="font-size:0.9em; line-height:25px; 
                            border-bottom:1px dotted #069; color:#069;">
                            <span class="glyphicon glyphicon-music" 
                            style="padding-right:10px;"></span>
							<?php echo $data['title']; ?>
                            </p>
                            <audio controls class="audios">
                                <source src="images/gallery_images/<?php 
								echo $data['image'];?>" >
                            </audio>
                </div>
                 <?php
					}
						}
				?>
   
        <div class="clear"></div>
    </div>
	<script src="gallery/vlb_engine/vlbdata1.js" type="text/javascript"></script>
	<!-- End VisualLightBox.com BODY section -->
    <div class="clear"></div>
