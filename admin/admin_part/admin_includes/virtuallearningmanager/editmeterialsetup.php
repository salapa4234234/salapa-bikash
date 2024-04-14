<?php
	if(isset($_POST['meterial_edit'])){
		require_once'../../../../php/db.php';
		$admin=$_POST['admin'];
		$id=$_POST['id'];
		$classid=$_POST['classid'];
		$subjectid=$_POST['subjectid'];
		$unitid=$_POST['unitid'];
		$prefile=$_POST['prefile'];
		
		$title=$_POST['title'];
		$category=$_POST['category'];
		$files=$_FILES['files']['name'];
		$files_tmp=$_FILES['files']['tmp_name'];
		$status=$_POST['status'];
		
		
		$header="location:../../loginsetup.php?topic=virtuallearningmanager&class=".$classid."&subject=".$subjectid."&unit=".$unitid."&msg=yes";
		$header1="location:../../loginsetup.php?topic=virtuallearningmanager&class=".$classid."&subject=".$subjectid."&unit=".$unitid."&msg=no";
		$path="../../../../files/virtualprogram/";
		
		if($files!=""){
			$files=date('d-M-Y-h-m-s').$files;
			
			
			$check=move_uploaded_file($files_tmp,$path.$files);
			if($check){
				if($prefile!=""){
					unlink($path.$prefile);
				}
				$sql="UPDATE `tbl_meterial` SET `category`='$category',`title`='$title',
				`meterial`='$files',`status`='$status',`admin`='$admin' WHERE id='$id'";
				$check=$obj->insert($sql);
				if($check){
					header($header);
				}else{
					header($header1);
				}
			}else{
				header($header1);
			}
		}
		else{
			$sql="UPDATE `tbl_meterial` SET `category`='$category',`title`='$title',
			`status`='$status',`admin`='$admin' WHERE id='$id'";
			$check=$obj->insert($sql);
			
			if($check){
				header($header);
			}
			else{
				header($header1);
			}

		}
	}
?>