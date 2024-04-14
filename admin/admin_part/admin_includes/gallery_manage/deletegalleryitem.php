<div class="gallery_wrap_one">
<?php
	$id=$_GET['id'];
	$result=$obj->select("select category, gallery_name from tbl_gallery_category where id='$id' and del='1'");
	$data=mysqli_fetch_assoc($result);
	$category=$data['category'];
	$gallery=$data['gallery_name'];
?>
<div class="gallery_manage_one">
	<div class="gallery_type_one">
    	<h2>
			<?php echo $gallery; ?>
            <span style="float:right;">
            	<a href="loginsetup.php?topic=trashgalleryitem&id=<?php echo $id; ?>">
                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> &nbsp; 
                <?php if($category=="Video Gallery") echo "Trash Video"; 
				else if($category=="Audio Gallery") echo "Trash Audio";
				else echo "Trash Image"; ?>
                </a> 
            </span>
            <span style="float:right;">
            	<a href="loginsetup.php?topic=deletegalleryitem&id=<?php echo $id; ?>">
                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> &nbsp;
                <?php if($category=="Video Gallery") echo "Delete Video"; 
				else if($category=="Audio Gallery") echo "Delete Audio";
				else echo "Delete Image"; ?>
                </a> |  &nbsp;
            </span>
            <span style="float:right;"> 
            	<a href="loginsetup.php?topic=addgalleryitem&id=<?php echo $id; ?>"> 
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> &nbsp; 
                <?php if($category=="Video Gallery") echo "Add Video"; 
				else if($category=="Audio Gallery") echo "Add Audio";
				else echo "Add Image"; ?>
                </a> |  &nbsp; 
            </span>
        </h2>
    </div>
    <div class="all_gallery_one">
	<form action="admin_includes/gallery_manage/delete_gallery_setup.php" method="post">
    	<input type="hidden" name="preid" value="<?php echo $id; ?>">
    	<?php
			$resu=$obj->select("select distinct gallery_name from tbl_gallery_category where 
			del='1' and category='$category' and id='$id' order by position");
			while($dat=mysqli_fetch_assoc($resu)){
				$gallery_name=$dat['gallery_name'];
		?>
        <?php
				$res=$obj->select("select * from tbl_gallery where parent='$id' and del='1' order by id desc ");
				$img_count=mysqli_num_rows($res);
		?>
        	<input type="hidden" name="row" value="<?php echo $img_count; ?>">
        <?php
				while($da=mysqli_fetch_assoc($res)){
		?>
    	<div class="gallery_img_one">        	
        	<label for="id<?php echo $da['id']; ?>">
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
					else if($category=="Image Gallery"){
				?>
                    <img src="../../images/gallery_images/<?php echo $da['image']; ?>" 
                    height="100" style="max-width:160px;">
                <?php
					}
				?>
            </label>
            <p style="text-align:center;">
                <input type="checkbox" name="id[]" id="id<?php echo $da['id']; ?>" value="<?php echo $da['id']; ?>"> 
                <label style="color:#F00;" for="id<?php echo $da['id']; ?>">select</label>
            </p>
      </div>
        <?php
			}
		?>
        <div class="clear"></div>
    </div>
    <?php
		}
	?>
    <input type="submit" name="delete_gallery_image_multiple" value="Delete selected item" onClick="return delete_image()" 
    style="border:none; background:#900; cursor:pointer; color:#FFF; height:35px; 
    margin:30px 0px; font-weight:bold; font-size:14px; padding:0px 20px;">
    </form>
    <div class="clear"></div>
</div>
<div class="clear"></div>
</div>