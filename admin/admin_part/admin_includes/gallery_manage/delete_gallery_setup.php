<?php
	require('../../../../php/db.php');
	/* -------------------- code for multiple delete Gallery  --------------------- */
	
	if(isset($_POST['delete_gallery_one'])){
		global $result;
		$id = $_POST['id'];
		$res=$obj->select("select * from tbl_gallery where parent='$id'");
		$count=mysqli_num_rows($res);
		if($count==0){
			$result=$obj->insert("update tbl_gallery_category set del='' where id='$id'");
		}
		else{
			$result="deleteitem";
		}
		
		if($result===true){
			header('location:../../loginsetup.php?topic=gallery');
		}
		elseif($result=="deleteitem"){
			header('location:../../loginsetup.php?topic=gallery&msg=deleteitem');
		}
		else{
			header('location:../../loginsetup.php?topic=gallery');
		}
		
	}
	
	/* -------------------- code for multiple delete Gallery  --------------------- */
	
	if(isset($_POST['delete_multiple_gallery'])){
		$row=$_POST['row'];
		global $result;
		for($i=0;$i<$row;$i++){
			$id = $_POST['checkbox'][$i];
			$res=$obj->select("select * from tbl_gallery where parent='$id'");
			$count=mysqli_num_rows($res);
			if($count==0){
				$result=$obj->insert("update tbl_gallery_category set del='' where id='$id'");
			}
			else{
				$result="deleteitem";
			}
		}
		if($result===true){
			header('location:../../loginsetup.php?topic=gallery_delete');
		}
		elseif($result=="deleteitem"){
			header('location:../../loginsetup.php?topic=gallery_delete&msg=deleteitem');
		}
		else{
			header('location:../../loginsetup.php?topic=gallery_delete');
		}
		
	}
	/* -------------------- code for multiple restore Gallery  --------------------- */
	if(isset($_POST['recover_gallery_multiple'])){
		$row=$_POST['row'];
		for($i=0;$i<$row;$i++){
			$id = $_POST['checkbox'][$i];
			$result=$obj->insert("update tbl_gallery_category set del='1' where id='$id'");
		}
		if($result){
			header('location:../../loginsetup.php?topic=gallery_trash');
		}
		else{
			header('location:../../loginsetup.php?topic=gallery_trash');
		}
	}
	
	/* -------------------- code for parmanent delete Gallery  --------------------- */
	if(isset($_POST['delete_gallery_permanent'])){
		$row=$_POST['row'];
		for($i=0;$i<$row;$i++){
			$id = $_POST['checkbox'][$i];
			$result=$obj->insert("delete from tbl_gallery_category where id='$id'");
		}
		if($result){
			header('location:../../loginsetup.php?topic=gallery_trash');
		}
		else{
			header('location:../../loginsetup.php?topic=gallery_trash');
		}
		
	}
	
	/*--------------- code for delete single ---------------------------*/
	if(isset($_POST['delete_gallery_image'])){
		$id=$_POST['id'];
		$view=$_POST['view'];
		$location1="location:../../loginsetup.php?topic=gallery&view=".$view;
		$result=$obj->insert("update tbl_gallery set del='' where id='$id'");
		if($result){
				header($location1);
			}
			else{
				header($location1);
			}
	}

	
	/* -------------------- code for multiple delete Gallery images  --------------------- */
	if(isset($_POST['delete_gallery_image_multiple'])){
		$row=$_POST['row'];
		$preid=$_POST['preid'];
		for($i=0;$i<$row;$i++){
			$id = $_POST['id'][$i];
			$result=$obj->insert("update tbl_gallery set del='' where id='$id'");
		}
		$header1="location:../../loginsetup.php?topic=deletegalleryitem&id=".$preid;
		$header2="location:../../loginsetup.php?topic=deletegalleryitem&id=".$preid;
		if($result){
			header($header1);
		}
		else{
			header($header2);
		}
		
	}
	/* -------------------- code for multiple delete Gallery images  --------------------- */
	if(isset($_POST['recover_gallery_image_multiple'])){
		$row=$_POST['row'];
		$preid=$_POST['preid'];
		$header1="location:../../loginsetup.php?topic=trashgalleryitem&id=".$preid."&msg=yse";
		$header2="location:../../loginsetup.php?topic=trashgalleryitem&id=".$preid."&msg=no";
		for($i=0;$i<$row;$i++){
			$id = $_POST['id'][$i];
			$result=$obj->insert("update tbl_gallery set del='1' where id='$id'");
		}
		if($result){
			header($header1);
		}
		else{
			header($header2);
		}
		
	}
	
	/* -------------------- code for multiple delete Gallery images  --------------------- */
	if(isset($_POST['delete_gallery_image_multiple_permanent'])){
		$row=$_POST['row'];
		$preid=$_POST['preid'];
		$header1="location:../../loginsetup.php?topic=trashgalleryitem&id=".$preid."&msg=yse";
		$header2="location:../../loginsetup.php?topic=trashgalleryitem&id=".$preid."&msg=no";
		$path="../../../../images/gallery_images/";
		for($i=0;$i<$row;$i++){
			$id = $_POST['id'][$i];
			$res=$obj->select("select * from tbl_gallery where id='$id'");
			$da=mysqli_fetch_assoc($res);
			$img=$da['image'];
			if($img!=""){
				unlink($path.$img);
			}
			$result=$obj->insert("delete from tbl_gallery where id='$id'");
		}
		if($result){
				header($header1);
			}
		else{
			header($header2);
		}
		
	}
	
	$obj->sql_close();
?>
