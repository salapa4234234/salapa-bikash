<?php
	if(isset($_POST['new_images_gallery'])){
		include('../../../../php/db.php');
		include('../file_upload/image_uploads.php');
		
		$admin=$_POST['admin'];
		$dates=$_POST['dates'];
		$gallery=$_POST['gallerys'];
		$image=$_FILES['image']['name'];
		$image_temp=$_FILES['image']['tmp_name'];
		$image_error=$_FILES['image']['error'];
		$image_type=$_FILES['image']['type'];
		$urls=$_POST['urls'];
		$title=$obj->sql_inject($_POST['title']);
		$alias=$obj->sql_inject($_POST['alias']);
		$content=$obj->sql_inject($_POST['content']);
		$feature=$_POST['feature'];
		$status=$_POST['status'];
		
		$re=$obj->select("select id from tbl_gallery order by id desc limit 1");
		$da=mysqli_fetch_assoc($re);
		$id=$da['id']+1;
		$image=$id.$image;
		
		$path="../../../../images/gallery_images/";
		
		$location="location:../../loginsetup.php?topic=gallery_image_add&msg=small_image";
		$location1="location:../../loginsetup.php?topic=gallery_image_add&msg=file_error";
		$location2="location:../../loginsetup.php?topic=gallery_image_add&msg=file_type";
		$location3="location:../../loginsetup.php?topic=gallery_image_add&msg=yes";
		$location4="location:../../loginsetup.php?topic=gallery_image_add&msg=error";
		
		$resu=$obj->select("select gallery_name from tbl_gallery_category where id='$gallery'");
		$dat=mysqli_fetch_assoc($resu);
		if($image!=""){
			if($image_error){
				header('$location1');
			}
			else{
				if($image_type!="image/jpg" && $image_type!="image/png" && $image_type !="image/gif" && $image_type!="image/jpeg"){
					header($location2);
				}
				else{
					$check=$obj_just_upload->simple_upload($image,$image_temp,$path);
					if($check){
						$result=$obj->select("INSERT INTO `tbl_gallery`(`parent`, `image`,`small_image`, 
						`title`, `alias`, `content`, `urls`, `feature`, `status`, `del`, `admin`, `dates`) 
						VALUES ('$gallery','$image',' ','$title','$alias','$content','$urls',
						'$feature','$status','1','$admin','$dates')") or $a=mysqli_error();
						
						if($result){
							header($location3);
						}
						else{
							header($location4);
						}
					}
				}
			}
		}
		
		
	}
?>