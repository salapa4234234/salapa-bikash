<?php
include('../../../../php/db.php');

/*--------------- code for delete single ---------------------------*/
if(isset($_POST['delete_article_single'])){
	$id=$_POST['id'];
	$categorys=$_POST['category'];
	$filter_category=$_POST['filter_category'];
	
	if($categorys!="" && $filter_category!=""){
		$loca="location:../../loginsetup.php?category=".$categorys."&filter_category=GO";
	}
	else{
		$loca="location:../../loginsetup.php?topic=articles";
	}
	
	$result=$obj->insert("update tbl_content set del='' where id='$id'");
	if($result){
			header($loca);
		}
		else{
			header($loca);
		}
}


/*--------------- code for delete multiple ---------------------------*/
if(isset($_POST['delete_multiple'])){
	$row=$_POST['row'];
	for($i=0;$i<$row;$i++){
		
		$id = $_POST['checkbox'][$i];
		$result=$obj->insert("update tbl_content set del='' where id='$id'");
		
	}
	if($result){
		header('location:../../loginsetup.php?topic=articles_delete');
	}
	else{
		header('location:../../loginsetup.php?topic=articles_delete');
	}
}

/* ---------------- delete parmanently -------------------------------*/

if(isset($_POST['delete_multiple_permanent'])){
	$row=$_POST['row'];
	$path="../../../../images/content_images/";
	$filePath="../../../../files/contentFile/";
	for($i=0;$i<$row;$i++){
		$id = $_POST['checkbox'][$i];
		$res=$obj->select("select * from tbl_content where id='$id'");
		$da=mysqli_fetch_assoc($res);
		$img=$da['image'];
		$small_image=$da['small_image'];
		$files=$da['files'];
		if($img!=""){
			unlink($path.$img);
		}
		if($small_image!=""){
			unlink($path.$small_image);
		}
		if($files!=""){
			unlink($filePath.$files);
		}
		$result=$obj->insert("delete from tbl_content where id='$id'");
	}
	if($result){
			header('location:../../loginsetup.php?topic=articles_trash');
		}
	else{
		header('location:../../loginsetup.php?topic=articles_trash');
	}
}
/*---------------- code for recover -------------------------------*/
if(isset($_POST['recover_multiple'])){
	$row=$_POST['row'];
	for($i=0;$i<$row;$i++){
		$id = $_POST['checkbox'][$i];
		$result=$obj->insert("update tbl_content set del='1' where id='$id'");
	}
	if($result){
			header('location:../../loginsetup.php?topic=articles_trash');
		}
	else{
		header('location:../../loginsetup.php?topic=articles_trash');
	}
}

$obj->sql_close();
?>

