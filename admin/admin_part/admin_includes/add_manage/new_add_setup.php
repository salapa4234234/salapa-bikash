<?php
	if(isset($_POST['new_advertise_'])){
		include('../../../../php/db.php');
		include('../file_upload/image_uploads.php');
		$admin=$_POST['admin'];
		$dates=$_POST['dates'];
		$client=$obj->sql_inject($_POST['client']);
		$url=$obj->sql_inject($_POST['url']);
		$type=$_POST['type'];
		$category=$_POST['category'];
		$status=$_POST['status'];
		$image=$_FILES['image']['name'];
		$image_temp=$_FILES['image']['tmp_name'];
		$image_error=$_FILES['image']['error'];
		
		$res=$obj->select("select id from tbl_add order by id desc limit 1");
		$dat=mysqli_fetch_assoc($res);
		$img=$dat['id']+1;
		$image=$img.$image;


		$path="../../../../images/add_images/";
		
		$location1="location:../../loginsetup.php?topic=advertise_add&msg=file_error";
		$location2="location:../../loginsetup.php?topic=advertise_add&msg=yes";
		$location3="location:../../loginsetup.php?topic=advertise_add&msg=error";
		
		if($image_error){
			$location1;
		}
		else{
			$check=$obj_just_upload->simple_upload($image,$image_temp,$path);
			if($check){
				$result=$obj->insert("INSERT INTO `tbl_add`(`id`, `client_name`, `url`, `type`, `category`, `image`, 
				`status`, `del`, `dates`, `admin`) VALUES ('','$client','$url','$type','$category',
				'$image','$status','1','$dates','$admin')");
				if($result){
					header($location2);
				}
				else{
					header($location3);
				}
			}
			else{
				header($location3);
			}
		}
		
	}
?>