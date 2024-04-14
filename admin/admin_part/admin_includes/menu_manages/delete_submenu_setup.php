<?php
	include('../../../../php/db.php');
	
	/* -------------------- code for single delete category  --------------------- */
	
	if(isset($_POST['delete_submenu'])){
		$id= $_POST['id'];
		$result=$obj->insert("update tbl_menu set del='' where id='$id'");
		if($result){
			header('location:../../loginsetup.php?topic=submenu&msg=yes');
		}
		else{
			header('location:../../loginsetup.php?topic=submenu&msg=no');
		}
		
	}
	
	/* -------------------- code for multiple delete category  --------------------- */
	
	if(isset($_POST['delete_multiple_submenu'])){
		$row=$_POST['row'];
		for($i=0;$i<$row;$i++){
			$id = $_POST['checkbox'][$i];
			$result=$obj->insert("update tbl_menu set del='' where id='$id'");
		}
		if($result){
			header('location:../../loginsetup.php?topic=submenu_delete');
		}
		else{
			header('location:../../loginsetup.php?topic=submenu_delete');
		}
		
	}
	
	/* ---------------- delete parmanently -------------------------------*/

	if(isset($_POST['delete_submenu_permanent'])){
		$row=$_POST['row'];
		for($i=0;$i<$row;$i++){
			$id = $_POST['checkbox'][$i];
			$result=$obj->insert("delete from tbl_menu where id='$id'");
		}
		if($result){
				header('location:../../loginsetup.php?topic=submenu_trash');
			}
		else{
			header('location:../../loginsetup.php?topic=submenu_trash');
		}
	}
	/*---------------- code for recover -------------------------------*/
	if(isset($_POST['recover_submenu_multiple'])){
		$row=$_POST['row'];
		for($i=0;$i<$row;$i++){
			$id = $_POST['checkbox'][$i];
			$result=$obj->insert("update tbl_menu set del='1' where id='$id'");
		}
		if($result){
				header('location:../../loginsetup.php?topic=submenu_trash');
			}
		else{
			header('location:../../loginsetup.php?topic=submenu_trash');
		}
	}
$obj->sql_close();
?>