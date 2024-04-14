<?php
	if(isset($_POST['unit_add'])){
		require_once'../../../../php/db.php';
		$classid=$_POST['classid'];
		$subjectid=$_POST['subjectid'];
		$unit=$_POST['unit'];
		$status=$_POST['status'];
		
		$sql="INSERT INTO `tbl_unit`(`subjectid`, `unit`, `status`) VALUES ('$subjectid','$unit','$status')";
		$check=$obj->insert($sql);
		$header="location:../../loginsetup.php?topic=virtuallearningmanager&class=".$classid."&subject=".$subjectid;
		if($check){
			header($header);
		}
	}
?>