<?php
	include('../../../../php/db.php');
	
	/* ================== code for delete member one ==============================================*/
	if(isset($_POST['deletefile'])){
		$id=$_POST['id'];
		$topic=$_POST['topic'];
		$header1="location:../../loginsetup.php?topic=".$topic;
		$result=$obj->insert("update tbl_file set del='' where id='$id'");
		if($result){
			header($header1);
		}
		else{
			header($header1);
		}
	}
	
	
	/*==================== code for delete member multiple ==========================================*/
	
	if(isset($_POST['deleteFileMultiple'])){
		$row=$_POST['row'];
		$topic=$_POST['topic'];
		$header1="location:../../loginsetup.php?topic=".$topic;
		for($i=0;$i<$row;$i++){
			$id = $_POST['checkbox'][$i];
			$result=$obj->insert("update tbl_file set del='' where id='$id'");
		}
		if($result){
				header($header1);
			}
		else{
			header($header1);
		}
	}
	/*==================== code for recover form multiple ==========================================*/
	
	if(isset($_POST['recoverFileMultiple'])){
		$row=$_POST['row'];
		$topic=$_POST['topic'];
		$header1="location:../../loginsetup.php?topic=".$topic;
		for($i=0;$i<$row;$i++){
			$id = $_POST['checkbox'][$i];
			$result=$obj->insert("update tbl_file set del='1' where id='$id'");
		}
		if($result){
				header($header1);
			}
		else{
			header($header1);
		}
	}
	
	/* ---------------- delete parmanently -------------------------------*/

	if(isset($_POST['deleteFilePermanent'])){
		$row=$_POST['row'];
		$topic=$_POST['topic'];
		$header1="location:../../loginsetup.php?topic=".$topic;
		for($i=0;$i<$row;$i++){
			$id = $_POST['checkbox'][$i];
			$prefile=$_POST['prefile'][$i];
			if($prefile!=""){
				$check=unlink("../../../../files/multipleupload/".$prefile);
				if($check){
					$result=$obj->insert("delete from tbl_file where id='$id'");
				}
			}
			else{
				$result=$obj->insert("delete from tbl_file where id='$id'");
			}
		}
		if($result){
				header($header1);
			}
		else{
			header($header1);
		}
	}
	
?>