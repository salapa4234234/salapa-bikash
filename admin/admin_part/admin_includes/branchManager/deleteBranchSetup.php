<?php
	include('../../../../php/db.php');
	
	/* -------------------- code for single delete category  --------------------- */
	
	if(isset($_POST['deleteBranch'])){
		$id= $_POST['id'];
		
		$result=$obj->insert("update tbl_branches set del='0' where id='$id'");
		if($result){
			header('location:../../loginsetup.php?topic=branches&msg=yes');
		}
		else{
			header('location:../../loginsetup.php?topic=branches&msg=no');
		}
		
	}
	
	/* -------------------- code for multiple delete category  --------------------- */
	
	if(isset($_POST['deleteBranchMultiple'])){
		$row=$_POST['row'];
		for($i=0;$i<$row;$i++){
			$id = @$_POST['checkbox'][$i];
			$result=$obj->insert("update tbl_branches set del='0' where id='$id'");
		}
		if($result){
			header('location:../../loginsetup.php?topic=deleteBranch');
		}
		else{
			header('location:../../loginsetup.php?topic=deleteBranch');
		}
		
	}
	
	/* ---------------- delete parmanently -------------------------------*/

	if(isset($_POST['deleteBranchPermanent'])){
		$row=$_POST['row'];
		for($i=0;$i<$row;$i++){
			$id = $_POST['checkbox'][$i];
			$result=$obj->insert("delete from tbl_branches where id='$id'");
		}
		if($result){
				header('location:../../loginsetup.php?topic=trashBranch');
			}
		else{
			header('location:../../loginsetup.php?topic=trashBranch');
		}
	}
	/*---------------- code for recover -------------------------------*/
	if(isset($_POST['recoverDeletedBranch'])){
		$row=$_POST['row'];
		for($i=0;$i<$row;$i++){
			$id = $_POST['checkbox'][$i];
			$result=$obj->insert("update tbl_branches set del='1' where id='$id'");
		}
		if($result){
				header('location:../../loginsetup.php?topic=trashBranch');
			}
		else{
			header('location:../../loginsetup.php?topic=trashBranch');
		}
	}
$obj->sql_close();
?>