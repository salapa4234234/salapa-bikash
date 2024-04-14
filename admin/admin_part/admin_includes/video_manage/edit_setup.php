<?php

/* ------------------------------ Code For video Status Change ----------------------------------*/
	if(isset($_POST['video_status_change'])){
		include('../../../../php/db.php');
		
		$id=$_POST['id'];
		$status=$_POST['status'];
		if($status==1){
			$status="";
		}
		else{
			$status=1;
		}
		$result=$obj->insert("update tbl_video set status='$status' where id='$id'");
		header('location:../../loginsetup.php?topic=video');
	}
	
	/* ------------------------------ Code For video Status Change ----------------------------------*/
	if(isset($_POST['video_feature_change'])){
		include('../../../../php/db.php');
		
		$id=$_POST['id'];
		$feature=$_POST['feature'];
		if($feature==1){
			$feature="";
		}
		else{
			$feature=1;
		}
		$result=$obj->insert("update tbl_video set feature='$feature' where id='$id'");
		header('location:../../loginsetup.php?topic=video');
	}
	
	/* ------------------------------ Code For edit  video Change ----------------------------------*/
	if(isset($_POST['video_edit_all'])){
		include('../../../../php/db.php');
		
		$id=$_POST['id'];
		$admin=$_POST['admin'];
		$dates=$_POST['dates'];
		$type=$_POST['types'];
		$url=$obj->sql_inject($_POST['url']);
		$title=$obj->sql_inject($_POST['title']);
		$status=$_POST['status'];
		$feature=$_POST['feature'];
		
		$result=$obj->insert("UPDATE `tbl_video` SET `videos`='$url',`title`='$title',
		`types`='$type',`status`='$status',`feature`='$feature',
		`admin`='$admin',`dates`='$dates' WHERE id='$id'");
		
		if($result){
			header('location:../../loginsetup.php?topic=video&msg=yes');
		}
		else{
			header('location:../../loginsetup.php?topic=video&msg=error');
		}
	}
?>