<?php
	include('../../../../php/db.php');
	
	/* -------------------- code for single delete category  --------------------- */
	
	if(isset($_POST['delete_faq'])){
		$id= $_POST['id'];
		
		$result=$obj->insert("update tbl_faq set del='' where id='$id'");
		if($result){
			header('location:../../loginsetup.php?topic=faq&msg=yes');
		}
		else{
			header('location:../../loginsetup.php?topic=faq&msg=no');
		}
		
	}
	
	/* -------------------- code for multiple delete category  --------------------- */
	
	if(isset($_POST['delete_multiple_faq'])){
		$row=$_POST['row'];
		for($i=0;$i<$row;$i++){
			$id = @$_POST['checkbox'][$i];
			$result=$obj->insert("update tbl_faq set del='' where id='$id'");
		}
		if($result){
			header('location:../../loginsetup.php?topic=faq_delete');
		}
		else{
			header('location:../../loginsetup.php?topic=faq_delete');
		}
		
	}
	
	/* ---------------- delete parmanently -------------------------------*/

	if(isset($_POST['delete_faq_permanent'])){
		$row=$_POST['row'];
		for($i=0;$i<$row;$i++){
			$id = $_POST['checkbox'][$i];
			$result=$obj->insert("delete from tbl_faq where id='$id'");
		}
		if($result){
				header('location:../../loginsetup.php?topic=faq_trash');
			}
		else{
			header('location:../../loginsetup.php?topic=faq_trash');
		}
	}
	/*---------------- code for recover -------------------------------*/
	if(isset($_POST['recover_faq_multiple'])){
		$row=$_POST['row'];
		for($i=0;$i<$row;$i++){
			$id = $_POST['checkbox'][$i];
			$result=$obj->insert("update tbl_faq set del='1' where id='$id'");
		}
		if($result){
				header('location:../../loginsetup.php?topic=faq_trash');
			}
		else{
			header('location:../../loginsetup.php?topic=faq_trash');
		}
	}
$obj->sql_close();
?>