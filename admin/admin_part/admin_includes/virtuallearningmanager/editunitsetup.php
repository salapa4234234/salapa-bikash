<?php
	if(isset($_POST['unit_edit'])){
		require_once'../../../../php/db.php';
		$id=$_POST['id'];
		$classid=$_POST['classid'];
		$subjectid=$_POST['subjectid'];
		$unit=$_POST['unit'];
		$status=$_POST['status'];
		
		$sql="UPDATE `tbl_unit` SET `subjectid`='$subjectid',`unit`='$unit', `status`='$status' WHERE id='$id'";
		$check=$obj->insert($sql);
		$header="location:../../loginsetup.php?topic=virtuallearningmanager&class=".$classid."&subject=".$subjectid;
		if($check){
			header($header);
		}
	}
?>