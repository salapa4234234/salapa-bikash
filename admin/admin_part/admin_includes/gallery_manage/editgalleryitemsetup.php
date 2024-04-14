<?php
	require_once'../../../../php/db.php';
	if(isset($_POST['edit_gallery_item'])){
		$admin=$_POST['admin'];
		$date=$_POST['dates'];
		$id=$_POST['id'];
		$prefile=$_POST['prefile'];
		$open=$_POST['open'];
		$title=$obj->sql_inject($_POST['title']);
		$alias=$obj->sql_inject($_POST['alias']);
		$parent=$obj->sql_inject($_POST['parent']);
		$files=$_FILES['files']['name'];
		$files_temp=$_FILES['files']['tmp_name'];
		$status=$obj->sql_inject($_POST['status']);
		$feature=$obj->sql_inject($_POST['feature']);
		
		$path="../../../../images/gallery_images/";
		$header1="location:../../loginsetup.php?topic=gallery&view=".$open."&msg=yes";
		$header2="location:../../loginsetup.php?topic=gallery&view=".$open."&msg=exist";
		$header3="location:../../loginsetup.php?topic=gallery&view=".$open."&msg=no";
		
		if($files!=""){
			$files=date('d-M-y-h-m-s').$files;
			if(file_exists($path.$files)){
				header($header2);
			}
			else{
				if($prefile!=""){
					unlink($path.$prefile);
				}
				$check=move_uploaded_file($files_temp,$path.$files);
				if($check){
					$sql="UPDATE `tbl_gallery` SET `parent`='$parent',`image`='$files',
					`title`='$title',`alias`='$alias',`feature`='$feature',`status`='$status',
					`admin`='$admin',`dates`='$date' WHERE `id`='$id'";
					$check=$obj->insert($sql);
					if($check){
						header($header1);
					}
					else{
						header($header3);
					}
				}
				else{
					header($header3);
				}
			}
		}
		else{
			$sql="UPDATE `tbl_gallery` SET `parent`='$parent',
			`title`='$title',`alias`='$alias',`feature`='$feature',`status`='$status',
			`admin`='$admin',`dates`='$date' WHERE `id`='$id'";
			$check=$obj->insert($sql);
			if($check){
				header($header1);
			}
			else{
				header($header3);
			}
		}
		
	}
?>