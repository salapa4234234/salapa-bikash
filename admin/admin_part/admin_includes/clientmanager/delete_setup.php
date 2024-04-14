<?php
include('../../../../php/db.php');
/* ---------------- delete parmanently -------------------------------*/
if(isset($_POST['delete_form_single'])){
	$id=$_POST['id'];
	$filePath="../../../../includes/formtopdf/examples/";
	
	$res=$obj->select("select * from tbl_client where id='$id'");
	$da=mysqli_fetch_assoc($res);
	$files=$da['file'];
	
	if($files!=""){
		unlink($filePath.$files);
	}
	$result=$obj->insert("delete from tbl_client where id='$id'");
	
	if($result){
			header('location:../../loginsetup.php?topic=clientmanager');
		}
	else{
		header('location:../../loginsetup.php?topic=clientmanager');
	}
}
/* ---------------- delete parmanently -------------------------------*/

if(isset($_POST['delete_multiple_client'])){
	$row=$_POST['row'];
	$filePath="../../../../includes/formtopdf/examples/";
	for($i=0;$i<$row;$i++){
		$id = $_POST['checkbox'][$i];
		$res=$obj->select("select * from tbl_client where id='$id'");
		$da=mysqli_fetch_assoc($res);
		$files=$da['file'];
		if($files!=""){
			unlink($filePath.$files);
		}
		$result=$obj->insert("delete from tbl_client where id='$id'");
	}
	if($result){
			header('location:../../loginsetup.php?topic=deleteclient');
		}
	else{
		header('location:../../loginsetup.php?topic=deleteclient');
	}
}
?>
