<?php
include('../../../../php/db.php');

/*--------------- code for delete single ---------------------------*/
if(isset($_POST['delete_add_single'])){
	$id=$_POST['id'];
	$result=$obj->insert("update tbl_add set del='0' where id='$id'");
	if($result){
			header('location:../../loginsetup.php?topic=advertise');
		}
		else{
			header('location:../../loginsetup.php?topic=advertise');
		}
}


/*--------------- code for delete multiple ---------------------------*/
if(isset($_POST['delete_multiple'])){
	$row=$_POST['row'];
	for($i=0;$i<$row;$i++){
		
		$id = $_POST['checkbox'][$i];
		$result=$obj->insert("update tbl_add set del='0' where id='$id'");
		
	}
	if($result){
		header('location:../../loginsetup.php?topic=advertise_delete');
	}
	else{
		header('location:../../loginsetup.php?topic=advertise_delete');
	}
}

/* ---------------- delete parmanently -------------------------------*/

if(isset($_POST['delete_multiple_permanent'])){
	$row=$_POST['row'];
	$path="../../../../images/add_images/";
	for($i=0;$i<$row;$i++){
		$id = $_POST['checkbox'][$i];
		$res=$obj->select("select * from tbl_add where id='$id'");
		$da=mysqli_fetch_assoc($res);
		$img=$da['image'];
		$small_image=$da['small_image'];
		if($img!=""){
			unlink($path.$img);
		}
		if($small_image!=0){
			unlink($path.$small_image);
		}
		$result=$obj->insert("delete from tbl_add where id='$id'");
	}
	if($result){
			header('location:../../loginsetup.php?topic=advertise_trash');
		}
	else{
		header('location:../../loginsetup.php?topic=advertise_trash');
	}
}
/*---------------- code for recover -------------------------------*/
if(isset($_POST['recover_multiple'])){
	$row=$_POST['row'];
	for($i=0;$i<$row;$i++){
		$id = $_POST['checkbox'][$i];
		$result=$obj->insert("update tbl_add set del='1' where id='$id'");
	}
	if($result){
			header('location:../../loginsetup.php?topic=advertise_trash');
		}
	else{
		header('location:../../loginsetup.php?topic=advertise_trash');
	}
}

$obj->sql_close();
?>

