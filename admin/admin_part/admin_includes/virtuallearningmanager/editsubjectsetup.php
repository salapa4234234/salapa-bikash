<?php
	if(isset($_POST['Subject_edit'])){
		require_once'../../../../php/db.php';
		$id=$_POST['id'];
		$classid=$_POST['classid'];
		$subject=$_POST['subject'];
		$status=$_POST['status'];
		
		$sql="UPDATE `tbl_subject` SET `classid`='$classid',`subject`='$subject', `status`='$status' WHERE id='$id'";
		$check=$obj->insert($sql);
		$header="location:../../loginsetup.php?topic=virtuallearningmanager&class=".$classid;
		if($check){
			header($header);
		}
	}
?>