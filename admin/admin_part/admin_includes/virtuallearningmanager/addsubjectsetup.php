<?php
	if(isset($_POST['subject_add'])){
		require_once'../../../../php/db.php';
		$classid=$_POST['classid'];
		$subject=$_POST['subject'];
		$status=$_POST['status'];
		
		$sql="INSERT INTO `tbl_subject`(`classid`, `subject`, `status`) VALUES ('$classid','$subject','$status')";
		$check=$obj->insert($sql);
		$header="location:../../loginsetup.php?topic=virtuallearningmanager&class=".$classid;
		if($check){
			header($header);
		}
	}
?>