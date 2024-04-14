<div class="gallery_wrap">
<?php
	if(isset($_GET['view'])){
		$view=$_GET['view'];
		include('admin_includes/gallery_manage/one_gallery.php');
	}
    elseif(isset($_GET['viewall'])){
		$viewall=$_GET['viewall'];
		include('admin_includes/gallery_manage/all_gallery.php');
	}
	else{
?>
<?php
	$result=$obj->select("select distinct category from tbl_gallery_category where del='1' order by id desc");
	while($data=mysqli_fetch_assoc($result)){
		$category=$data['category'];
		
		$resul=$obj->select("select id from tbl_gallery_category where category='$category'");
		$datas=mysqli_fetch_assoc($resul);
		$idd=$datas['id'];
?>
<div class="gallery_manage">
	<div class="gallery_type">
    	<h2><?php echo $category; ?>
            <span style="float:right;">
            	<a href="loginsetup.php?topic=gallery_add">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> &nbsp; Create New </a>
            </span>
        </h2>
        <div class="clear"></div>
    </div>
    <div class="all_gallery">
    	<?php
			$resu=$obj->select("select distinct gallery_name,id from tbl_gallery_category where 
			del='1' and category='$category' order by id desc");
			while($dat=mysqli_fetch_assoc($resu)){
				$gallery_name=$dat['gallery_name'];
				$id=$dat['id'];
				$res=$obj->select("select * from tbl_gallery where parent='$id' and del='1' order by id desc ");
				$img_count=mysqli_num_rows($res);
				$c=1;
				while($da=mysqli_fetch_assoc($res)){
		?>
        <?php
				if($img_count==$c){
		?>
    	<div class="gallery_img" style="height:auto; margin-top:10px;">
        	<a href="loginsetup.php?topic=gallery&view=<?php echo $id ?>">
        	<h3 style="font-size:1.2em; margin:7px 0px;"><?php echo $gallery_name; ?></h3>
        	<img src="../../images/gallery_images/<?php echo $da['image']; ?>" style="max-width:160px; height:70px;">
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
    <div class="clear"></div>
</div>
<?php
	}
	}
?>
<div class="clear"></div>
</div>