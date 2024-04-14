<?php
	include('../../../../php/db.php');
	
	/* -------------------- code for single delete category  --------------------- */
	
	if(isset($_POST['delete_menu'])){
		$id= $_POST['id'];
		$link=$_POST['link'];
		$res=$obj->select("select * from tbl_content where category='$link'");
		$num=mysqli_num_rows($res);
		if($num>0){
			header('location:../../loginsetup.php?topic=menu&msg=contentLinking');			
		}
		else{
			$result=$obj->insert("update tbl_menu set del='' where id='$id'");
			if($result){
				header('location:../../loginsetup.php?topic=menu&msg=yes');
			}
			else{
				header('location:../../loginsetup.php?topic=menu&msg=no');
			}
		}
		
	}
	
	/* -------------------- code for multiple delete category  --------------------- */
	
	if(isset($_POST['delete_multiple_menu'])){
		$row=$_POST['row'];
		for($i=0;$i<$row;$i++){
			$id = @$_POST['checkbox'][$i];
			$r=$obj->select("select link from tbl_menu where id='$id'");
			$d=mysqli_fetch_assoc($r);
			$link=$d['link'];
			
			$res=$obj->select("select * from tbl_content where category='$link'");
			$num=mysqli_num_rows($res);
			if($num>0){
				header('location:../../loginsetup.php?topic=menu_delete&msg=contentLinking');			
			}
			else{
				$result=$obj->insert("update tbl_menu set del='' where id='$id'");
			}
		}
		if($result){
			header('location:../../loginsetup.php?topic=menu_delete');
		}
		else{
			header('location:../../loginsetup.php?topic=menu_delete');
		}
		
	}
	
	/* ---------------- delete parmanently -------------------------------*/

	if(isset($_POST['delete_menu_permanent'])){
		$row=$_POST['row'];
		for($i=0;$i<$row;$i++){
			$id = $_POST['checkbox'][$i];
			$result=$obj->insert("delete from tbl_menu where id='$id'");
		}
		if($result){
				header('location:../../loginsetup.php?topic=menu_trash');
			}
		else{
			header('location:../../loginsetup.php?topic=menu_trash');
		}
	}
	/*---------------- code for recover -------------------------------*/
	if(isset($_POST['recover_menu_multiple'])){
		$row=$_POST['row'];
		for($i=0;$i<$row;$i++){
			$id = $_POST['checkbox'][$i];
			$result=$obj->insert("update tbl_menu set del='1' where id='$id'");
		}
		if($result){
				header('location:../../loginsetup.php?topic=menu_trash');
			}
		else{
			header('location:../../loginsetup.php?topic=menu_trash');
		}
	}
$obj->sql_close();
?>