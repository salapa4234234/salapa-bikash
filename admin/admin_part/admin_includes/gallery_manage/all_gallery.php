<div class="gallery_wrap">
<?php
	$result=$obj->select("select category from tbl_gallery_category where id='$viewall' and del='1'");
	$data=mysqli_fetch_assoc($result);
	$category=$data['category'];
?>
<div class="gallery_manage">
	<div class="gallery_type">
    	<h2>
			<?php echo $category; ?>
            <span style="float:right;">
            	<a href="loginsetup.php?topic=gallery_add">Create New</a>
            </span>
        </h2>
    </div>
    <div class="all_gallery">
    	<?php
			$resu=$obj->select("select distinct gallery_name,id from tbl_gallery_category where 
			del='1' and category='$category' order by position");
			while($dat=mysqli_fetch_assoc($resu)){
				$parent=$dat['id'];
				$res=$obj->select("select * from tbl_gallery where parent='$parent' and del='1' order by id desc ");
				$img_count=mysqli_num_rows($res);
				$c=1;
				while($da=mysqli_fetch_assoc($res)){
		?>
        <?php
				if($img_count==$c){
		?>
    	<div class="gallery_img">
        	<a href="loginsetup.php?topic=gallery&view=<?php echo $da['parent']; ?>">
        	<h3><?php echo $dat['gallery_name']; ?></h3>
        	<img src="../../images/gallery_images/<?php echo $da['image']; ?>" height="100">
            <p>( <?php echo $img_count; ?> Purcures )</p>
            </a>
        </div>
        <?php
				}
			?>
        <?php
			$c++;
			}
		?>
    </div>
    <?php
		}
	?>
</div>
</div>