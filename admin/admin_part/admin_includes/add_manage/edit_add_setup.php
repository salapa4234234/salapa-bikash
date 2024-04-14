<?php
	
	include('../../../../php/db.php');
	/* ------------------------------ Code For Status Change ----------------------------------*/
	if(isset($_POST['status_change'])){
		$id=$_POST['id'];
		$status=$_POST['status'];
		if($status==1){
			$status="";
		}
		else{
			$status=1;
		}
		$result=$obj->insert("update tbl_add set status='$status' where id='$id'");
		header('location:../../loginsetup.php?topic=advertise');
	}
	
	/* ------------------------------ Code For total Change ----------------------------------*/
	
	if(isset($_POST['advertise_edit_'])){
		include('../file_upload/image_update.php');
		$id=$_POST['id'];
		$admin="M ".$_POST['admin'];
		$dates=$_POST['dates'];
		$preimg=$_POST['preimg'];
		$client=$obj->sql_inject($_POST['client']);
		$url=$obj->sql_inject($_POST['url']);
		$type=$_POST['type'];
		$category=$_POST['category'];
		$status=$_POST['status'];
		$image=$_FILES['image']['name'];
		$image_temp=$_FILES['image']['tmp_name'];
		$image_error=$_FILES['image']['error'];
		
		
		
		$path="../../../../images/add_images/";
		
		$location1="location:../../loginsetup.php?topic=advertise&task=edit&id=".$id."&msg=file_error";
		$location2="location:../../loginsetup.php?topic=advertise&task=edit&id=".$id."&msg=yes";
		$location3="location:../../loginsetup.php?topic=advertise&task=edit&id=".$id."&msg=error";
		
		if($image!=""){
			$res=$obj->select("select id from tbl_add order by id desc limit 1");
			$dat=mysqli_fetch_assoc($res);
			$img=$dat['id'];
			$image="Change".$img.$image;
			
			if($image_error){
				header($location1);
			}
			else{
				$check=$obj_image_just_change->image_change($preimg,$image,$image_temp,$path);
				if($check){
					$result=$obj->insert("update tbl_add set client_name='$client', url='$url',type='$type',
					category='$category',image='$image',status='$status',dates='$dates',admin='$admin' where id='$id'");
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
		else{
			$result=$obj->insert("update tbl_add set client_name='$client', url='$url',type='$type',
			category='$category',status='$status',dates='$dates',admin='$admin' where id='$id'");
			if($result){
				header($location2);
			}
			else{
				header($location3);
			}
		}
		
		
	}
?>