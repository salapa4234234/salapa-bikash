<div class="gallery_wrap_one">
<?php
	$result=$obj->select("select category, gallery_name from tbl_gallery_category where id='$view' and del='1'");
	$data=mysqli_fetch_assoc($result);
	$category=$data['category'];
	$gallery=$data['gallery_name'];
?>
<div class="gallery_manage_one">
	<div class="gallery_type_one">
    	<h2>
			<?php echo $gallery; ?>
            <span style="float:right;">
            	<a href="loginsetup.php?topic=trashgalleryitem&id=<?php echo $view; ?>">
                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> &nbsp; 
                <?php if($category=="Video Gallery") echo "Trash Video"; 
				else if($category=="Audio Gallery") echo "Trash Audio";
				else echo "Trash Image"; ?>
                </a> 
            </span>
            <span style="float:right;">
            	<a href="loginsetup.php?topic=deletegalleryitem&id=<?php echo $view; ?>">
                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> &nbsp;
                <?php if($category=="Video Gallery") echo "Delete Video"; 
				else if($category=="Audio Gallery") echo "Delete Audio";
				else echo "Delete Image"; ?>
                </a> |  &nbsp;
            </span>
            <span style="float:right;"> 
            	<a href="loginsetup.php?topic=addgalleryitem&id=<?php echo $view; ?>"> 
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> &nbsp; 
                <?php if($category=="Video Gallery") echo "Add Video"; 
				else if($category=="Audio Gallery") echo "Add Audio";
				else echo "Add Image"; ?>
                </a> |  &nbsp; 
            </span>
        </h2>
    </div>
    <div class="all_gallery_one">
    	<?php
			$resu=$obj->select("select distinct gallery_name from tbl_gallery_category where 
			del='1' and category='$category' and id='$view' order by position");
			while($dat=mysqli_fetch_assoc($resu)){
				$gallery_name=$dat['gallery_name'];
		?>
        <?php
				$res=$obj->select("select * from tbl_gallery where parent='$view' and del='1' order by id desc ");
				$img_count=mysqli_num_rows($res);
				while($da=mysqli_fetch_assoc($res)){
		?>
    	<div class="gallery_img_one"> 
        	<?php
				if($category=="Video Gallery"){
			?>    
        	<video  height="90" controls>
                <source src="../../images/gallery_images/<?php echo $da['image']; ?>" type="video/mp4">
            </video>  
            <?php
				}
				else if($category=="Audio Gallery"){
			?>
            <audio controls style="width:170px; margin:30px 0px;">
              <source src="../../images/gallery_images/<?php echo $da['image']; ?>">
            </audio> 
            <?php
				}
				else{
			?>	
        	<img src="../../images/gallery_images/<?php echo $da['image']; ?>" height="100" style="max-width:160px;">
            <?php
				}
			?>
            <p style="text-align:center;">
              <a href="loginsetup.php?topic=editgalleryitem&id=<?php echo $da['id']; ?>" 
                style="background:#900; cursor:pointer; color:#FFF; 
                padding:1px 8px; float:left; margin-left:30px; margin-top:10px;">Edit</a>
                <?php
					if(isset($_GET['view'])){
						$view=$_GET['view'];
					}
				?>
          <form action="admin_includes/gallery_manage/delete_gallery_setup.php" method="post" style="float:right;">
                	<input type="hidden" name="view" value="<?php echo $view; ?>">
                	<input type="hidden" name="id" value="<?php echo $da['id']; ?>">
                    <input type="submit" name="delete_gallery_image" value="Delete" onClick="return delete_image()" 
                    style="border:none; background:#900; cursor:pointer; color:#FFF; height:17px; 
                    margin-right:30px; font-weight:bold; font-size:11px;">
                </form>
            </p>
      </div>
        <?php
			}
		?>
        <div class="gallery_img_one">        
            <p style="padding-top:30px;">
            	<a href="loginsetup.php?topic=addgalleryitem&id=<?php echo $view;  ?>" 
                style=" cursor:pointer; color:#F00; text-align:center;
                padding:1px 8px;">	
            <?php
				if($category=="Image Gallery"){
			?>
        		<img src="them_img/addimage.png"><br>
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> &nbsp; Add Images
            </a>
            <?php
				}
				else if($category=="Video Gallery"){
			?>
        		<img src="them_img/addimage.png"><br>
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> &nbsp; Add Video
            </a>
            <?php
				}
				else if($category=="Audio Gallery"){
			?>
        		<img src="them_img/addimage.png"><br>
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> &nbsp; Add Audio
            </a>
            <?php
				}
			?>
            </p>
        </div>
        <div class="clear"></div>
    </div>
    <?php
		}
	?>
    <div class="clear"></div>
</div>
<div class="clear"></div>
</div>