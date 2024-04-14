<?php
	if(isset($_POST['class_add'])){
		require_once'../../../../php/db.php';
		$class=$_POST['class'];
		$status=$_POST['status'];
		
		$sql="INSERT INTO `tbl_class`(`class`, `status`) VALUES ('$class','$status')";
		$check=$obj->insert($sql);
		$header="location:../../loginsetup.php?topic=virtuallearningmanager";
		if($check){
			header($header);
		}
	}
?>