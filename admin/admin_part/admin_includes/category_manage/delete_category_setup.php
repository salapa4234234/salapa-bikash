<?php
	include('../../../../php/db.php');
	
	/* -------------------- code for single delete category  --------------------- */
	
	if(isset($_POST['delete_category'])){
		$id= $_POST['id'];
		$result=$obj->insert("update tbl_category set del='' where id='$id'");
		if($result){
			header('location:../../loginsetup.php?topic=category&msg=yes');
		}
		else{
			header('location:../../loginsetup.php?topic=category&msg=no');
		}
		
	}
	
	/* -------------------- code for multiple delete category  --------------------- */
	
	if(isset($_POST['delete_multiple_category'])){
		$row=$_POST['row'];
		for($i=0;$i<$row;$i++){
			$id = $_POST['checkbox'][$i];
			$result=$obj->insert("update tbl_category set del='' where id='$id'");
		}
		if($result){
			header('location:../../loginsetup.php?topic=category_delete');
		}
		else{
			header('location:../../loginsetup.php?topic=category_delete');
		}
		
	}
	
	/* ---------------- delete parmanently -------------------------------*/

	if(isset($_POST['delete_category_permanent'])){
		$row=$_POST['row'];
		for($i=0;$i<$row;$i++){
			$id = $_POST['checkbox'][$i];
			$result=$obj->insert("delete from tbl_category where id='$id'");
		}
		if($result){
				header('location:../../loginsetup.php?topic=categoty_trash');
			}
		else{
			header('location:../../loginsetup.php?topic=categoty_trash');
		}
	}
	/*---------------- code for recover -------------------------------*/
	if(isset($_POST['recover_category_multiple'])){
		$row=$_POST['row'];
		for($i=0;$i<$row;$i++){
			$id = $_POST['checkbox'][$i];
			$result=$obj->insert("update tbl_category set del='1' where id='$id'");
		}
		if($result){
				header('location:../../loginsetup.php?topic=categoty_trash');
			}
		else{
			header('location:../../loginsetup.php?topic=categoty_trash');
		}
	}
$obj->sql_close();
?>