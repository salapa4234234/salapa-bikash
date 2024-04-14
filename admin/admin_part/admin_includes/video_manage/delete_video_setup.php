<?php
	/* -------------------- code for multiple DELETE VIDEO  --------------------- */
	require('../../../../php/db.php');
	
	if(isset($_POST['delete_video_one'])){
		$id=$_POST['id'];
		$result=$obj->insert("update tbl_video set del='' where id='$id'");
		if($result){
			header('location:../../loginsetup.php?topic=video');
		}
		else{
			header('location:../../loginsetup.php?topic=video');
		}
	}
	if(isset($_POST['delete_multiple_video'])){
		$row=$_POST['row'];
		for($i=0;$i<$row;$i++){
			$id = $_POST['checkbox'][$i];
			$result=$obj->insert("update tbl_video set del='' where id='$id'");
		}
		if($result){
			header('location:../../loginsetup.php?topic=video_delete');
		}
		else{
			header('location:../../loginsetup.php?topic=video_delete');
		}
	}
	
	/* -------------------- code for restore MULTIPLE VIDEO  --------------------- */
	if(isset($_POST['recover_video_multiple'])){
		$row=$_POST['row'];
		for($i=0;$i<$row;$i++){
			$id = $_POST['checkbox'][$i];
			$result=$obj->insert("update tbl_video set del='1' where id='$id'");
		}
		if($result){
			header('location:../../loginsetup.php?topic=video_trash');
		}
		else{
			header('location:../../loginsetup.php?topic=video_trash');
		}
	}
	
	/* -------------------- code for Delete  MULTIPLE VIDEO Parmanent --------------------- */
	if(isset($_POST['delete_video_permanent'])){
		$row=$_POST['row'];
		for($i=0;$i<$row;$i++){
			$id = $_POST['checkbox'][$i];
			$result=$obj->insert("delete from tbl_video where id='$id'");
		}
		if($result){
			header('location:../../loginsetup.php?topic=video_trash');
		}
		else{
			header('location:../../loginsetup.php?topic=video_trash');
		}
	}
	
	
	$obj->sql_close();
?>