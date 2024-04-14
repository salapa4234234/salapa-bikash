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

<div class="gallery_manage">
	<div class="gallery_type">
    	<h2>Image Gallery
            <span style="float:right;">
            	<a href="loginsetup.php?topic=gallery_add">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> &nbsp; Create New </a>
            </span>
        </h2>
        <div class="clear"></div>
    </div>
    <?php
		$sql="select * from tbl_gallery_category where category='Image Gallery' and del='1'";
		$result=$obj->select($sql);
		while($data=mysqli_fetch_assoc($result)){
			$parent=$data['id'];
			
		$sql1="select * from tbl_gallery where parent='$parent' and del='1'";
		$result1=$obj->select($sql1);
		$row=mysqli_num_rows($result1);
		$data1=mysqli_fetch_assoc($result1);
	?>
    <div class="all_gallery">
    	<div class="gallery_img" style="height:auto; margin-top:10px;">
        	<a href="loginsetup.php?topic=gallery&view=<?php echo $data['id']; ?>">
        	<h3 style="font-size:1.2em; margin:7px 0px;"><?php echo $data['gallery_name']; ?></h3>
        	<?php if($data1['image']!=""){ ?>
            <img src="../../images/gallery_images/<?php	echo $data1['image'];?>"
            style="max-width:160px; height:70px;">
           	<?php
			}else{
			?>
            <img src="them_img/gallery.png" style="max-width:160px; height:70px;">            
            <?php
			}
			?>
            <p>( <?php echo $row; ?> Pictures )</p>
            </a>
            <p style="text-align:center;">
                <a href="loginsetup.php?topic=galleryedit&id=<?php echo $data['id']; ?>" 
                style="background:#900; cursor:pointer; color:#FFF; 
                padding:1px 8px; float:left; margin-left:30px;">Edit</a>
                
                <form action="admin_includes/gallery_manage/delete_gallery_setup.php" method="post" style="float:right;">
                	<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                    <input type="submit" name="delete_gallery_one" value="Delete" onClick="return delete_image()" 
                    style="border:none; background:#900; cursor:pointer; color:#FFF; height:17px; 
                    margin-right:30px; font-weight:bold; font-size:11px;">
                </form>
            </p>
        </div>
    </div>
    <?php
		}
	?>
    <div class="clear"></div>
</div>

<div class="gallery_manage">
	<div class="gallery_type">
    	<h2>Video Gallery
            <span style="float:right;">
            	<a href="loginsetup.php?topic=gallery_add">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> &nbsp; Create New </a>
            </span>
        </h2>
        <div class="clear"></div>
    </div>
    <?php
		$sql="select * from tbl_gallery_category where category='Video Gallery' and del='1'";
		$result=$obj->select($sql);
		while($data=mysqli_fetch_assoc($result)){
			$parent=$data['id'];
			
		$sql1="select * from tbl_gallery where parent='$parent' and del='1'";
		$result1=$obj->select($sql1);
		$row=mysqli_num_rows($result1);
		$data1=mysqli_fetch_assoc($result1);
	?>
    <div class="all_gallery">
    	<div class="gallery_img" style="height:auto; margin-top:10px;">
        	<a href="loginsetup.php?topic=gallery&view=<?php echo $data['id']; ?>">
        	<h3 style="font-size:1.2em; margin:7px 0px;"><?php echo $data['gallery_name']; ?></h3>
        	<?php if($data1['image']!=""){ ?>
                <video  height="90" controls>
                    <source src="../../images/gallery_images/<?php	echo $data1['image'];?>" >
                </video>
           	<?php
			}else{
			?>
            <img src="them_img/gallery.png" style="max-width:160px; height:70px;">            
            <?php
			}
			?>
            <p>( <?php echo $row; ?> Videos )</p>
            </a>
            <p style="text-align:center;">
                <a href="loginsetup.php?topic=galleryedit&id=<?php echo $data['id']; ?>" 
                style="background:#900; cursor:pointer; color:#FFF; 
                padding:1px 8px; float:left; margin-left:30px;">Edit</a>
                
                <form action="admin_includes/gallery_manage/delete_gallery_setup.php" method="post" style="float:right;">
                	<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                    <input type="submit" name="delete_gallery_one" value="Delete" onClick="return delete_image()" 
                    style="border:none; background:#900; cursor:pointer; color:#FFF; height:17px; 
                    margin-right:30px; font-weight:bold; font-size:11px;">
                </form>
            </p>
        </div>
    </div>
    <?php
		}
	?>
    <div class="clear"></div>
</div>
<div class="gallery_manage">
	<div class="gallery_type">
    	<h2>Audio Gallery
            <span style="float:right;">
            	<a href="loginsetup.php?topic=gallery_add">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> &nbsp; Create New </a>
            </span>
        </h2>
        <div class="clear"></div>
    </div>
    <?php
		$sql="select * from tbl_gallery_category where category='Audio Gallery' and del='1'";
		$result=$obj->select($sql);
		while($data=mysqli_fetch_assoc($result)){
			$parent=$data['id'];
			
		$sql1="select * from tbl_gallery where parent='$parent' and del='1'";
		$result1=$obj->select($sql1);
		$row=mysqli_num_rows($result1);
		$data1=mysqli_fetch_assoc($result1);
	?>
    <div class="all_gallery">
    	<div class="gallery_img" style="height:auto; margin-top:10px;">
        	<a href="loginsetup.php?topic=gallery&view=<?php echo $data['id']; ?>">
        	<h3 style="font-size:1.2em; margin:7px 0px;"><?php echo $data['gallery_name']; ?></h3>
        	<?php if($data1['image']!=""){ ?>
                <audio controls style="width:170px; margin:10px 0px;">
                  <source src="../../images/gallery_images/<?php echo $data1['image']; ?>">
                </audio> 
           	<?php
			}else{
			?>
            <img src="them_img/gallery.png" style="max-width:160px; height:70px;">            
            <?php
			}
			?>
            <p>( <?php echo $row; ?> Pictures )</p>
            </a>
            <p style="text-align:center;">
                <a href="loginsetup.php?topic=galleryedit&id=<?php echo $data['id']; ?>" 
                style="background:#900; cursor:pointer; color:#FFF; 
                padding:1px 8px; float:left; margin-left:30px;">Edit</a>
                
                <form action="admin_includes/gallery_manage/delete_gallery_setup.php" method="post" style="float:right;">
                	<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                    <input type="submit" name="delete_gallery_one" value="Delete" onClick="return delete_image()" 
                    style="border:none; background:#900; cursor:pointer; color:#FFF; height:17px; 
                    margin-right:30px; font-weight:bold; font-size:11px;">
                </form>
            </p>
        </div>
    </div>
    <?php
		}
	?>
    <div class="clear"></div>
</div>
<?php
	}
?>
<div class="clear"></div>
</div>