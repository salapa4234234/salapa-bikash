<?php
	/* ------------------------------ Code For gallery Status Change ----------------------------------*/
	if(isset($_POST['status_change_gallery'])){
		include('../../../../php/db.php');
		
		$id=$_POST['id'];
		$status=$_POST['status'];
		if($status==1){
			$status="";
		}
		else{
			$status=1;
		}
		$result=$obj->insert("update tbl_gallery_category set status='$status' where id='$id'");
		header('location:../../loginsetup.php?topic=gallery_edit');
	}
	
	/* ------------------------------ Code For gallery image Status Change ----------------------------------*/
	if(isset($_POST['status_change_gallery_image'])){
		include('../../../../php/db.php');
		
		$id=$_POST['id'];
		$status=$_POST['status'];
		if($status==1){
			$status="";
		}
		else{
			$status=1;
		}
		$result=$obj->insert("update tbl_gallery set status='$status' where id='$id'");
		header('location:../../loginsetup.php?topic=gallery_images_edit');
	}
	
	if(isset($_POST['status_change_gallery_image_single'])){
		include('../../../../php/db.php');
		
		$id=$_POST['id'];
		$status=$_POST['status'];
		
		$location1="location:../../loginsetup.php?topic=gallery_images_edit&edit=".$id;
		if($status==1){
			$status="";
		}
		else{
			$status=1;
		}
		$result=$obj->insert("update tbl_gallery set status='$status' where id='$id'");
		header($location1);
	}
	
	/* ------------------------------ Code For gallery  image feature Change ----------------------------------*/
	if(isset($_POST['feature_change_gallery_image'])){
		include('../../../../php/db.php');
		
		$id=$_POST['id'];
		$feature=$_POST['feature'];
		if($feature==1){
			$feature="";
		}
		else{
			$feature=1;
		}
		$result=$obj->insert("update tbl_gallery set feature='$feature' where id='$id'");
		header('location:../../loginsetup.php?topic=gallery_images_edit');
	}
	if(isset($_POST['feature_change_gallery_image_single'])){
		include('../../../../php/db.php');
		
		$id=$_POST['id'];
		$feature=$_POST['feature'];
		$location1="location:../../loginsetup.php?topic=gallery_images_edit&edit=".$id;
		if($feature==1){
			$feature="";
		}
		else{
			$feature=1;
		}
		$result=$obj->insert("update tbl_gallery set feature='$feature' where id='$id'");
		header($location1);
	}
?>