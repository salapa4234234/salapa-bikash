<?php
	require_once'../../../../php/db.php';

/* delete class ------------------------------------------------------------------- */
	if(isset($_POST['delete_class'])){
		$id=$_POST['id'];
		
		$header="location:../../loginsetup.php?topic=virtuallearningmanager";
		$header1="location:../../loginsetup.php?topic=virtuallearningmanager&msg=contentexist";
		
		$sql="select * from tbl_subject where classid='$id'";
		$result=$obj->select($sql);
		$row=mysqli_num_rows($result);
		if($row>0){
			header($header1);
		}
		else{
			$sql="delete from tbl_class where id='$id'";
			$obj->insert($sql);
			header($header);
		}
	}
	
/* delete subject ------------------------------------------------------------------- */
	if(isset($_POST['delete_subject'])){
		$id=$_POST['id'];
		$classid=$_POST['classid'];
		
		$header="location:../../loginsetup.php?topic=virtuallearningmanager&class=".$classid;
		$header1="location:../../loginsetup.php?topic=virtuallearningmanager&class=".$classid."&msg=contentexist";
		
		$sql="select * from tbl_unit where subjectid='$id'";
		$result=$obj->select($sql);
		$row=mysqli_num_rows($result);
		if($row>0){
			header($header1);
		}
		else{
			$sql="delete from tbl_subject where id='$id'";
			$obj->insert($sql);
			header($header);
		}
	}
	
/* delete unit ------------------------------------------------------------------- */
	if(isset($_POST['delete_unit'])){
		$id=$_POST['id'];
		$classid=$_POST['classid'];
		$subjectid=$_POST['subjectid'];
		
		$header="location:../../loginsetup.php?topic=virtuallearningmanager&class=".$classid."&subject=".$subjectid;
		$header1="location:../../loginsetup.php?topic=virtuallearningmanager&class=".$classid."&subject=".$subjectid."&msg=contentexist";
		
		$sql="select * from tbl_meterial where unitid='$id'";
		$result=$obj->select($sql);
		$row=mysqli_num_rows($result);
		if($row>0){
			header($header1);
		}
		else{
			$sql="delete from tbl_unit where id='$id'";
			$obj->insert($sql);
			header($header);
		}
	}
	
/* delete unit ------------------------------------------------------------------- */
	if(isset($_POST['delete_meterial'])){
		$id=$_POST['id'];
		$classid=$_POST['classid'];
		$subjectid=$_POST['subjectid'];
		$unitid=$_POST['unitid'];
		$prefile=$_POST['prefile'];
		$path="../../../../files/virtualprogram/";
		
		$header="location:../../loginsetup.php?topic=virtuallearningmanager&class=".$classid."&subject=".$subjectid."&unit=".$unitid."&msg=yes";
		$header1="location:../../loginsetup.php?topic=virtuallearningmanager&class=".$classid."&subject=".$subjectid."&unit=".$unitid."&msg=no";
		
		if($prefle!=""){
		$check=unlink($path.$prefile);
		if($check){
			$sql="delete from tbl_meterial where id='$id'";
			$obj->insert($sql);
			header($header);
		}
		else{
			header($header1);
		}
		}
		else{
			$sql="delete from tbl_meterial where id='$id'";
			$obj->insert($sql);
			header($header);
		}
	}
?>