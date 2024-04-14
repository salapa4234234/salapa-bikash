<?php
	if(isset($_POST['class_edit'])){
		require_once'../../../../php/db.php';
		$id=$_POST['id'];
		$class=$_POST['class'];
		$status=$_POST['status'];
		
		$sql="UPDATE `tbl_class` SET `class`='$class',`status`='$status' WHERE id='$id'";
		$check=$obj->insert($sql);
		$header="location:../../loginsetup.php?topic=virtuallearningmanager";
		if($check){
			header($header);
		}
	}
?>