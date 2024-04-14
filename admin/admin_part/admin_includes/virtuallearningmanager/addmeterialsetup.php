<?php
	if(isset($_POST['add_meterial'])){
		require_once'../../../../php/db.php';
		$admin=$_POST['admin'];
		$dates=date('d-M-Y');
		$classid=$_POST['classid'];
		$subjectid=$_POST['subjectid'];
		$unitid=$_POST['unitid'];
		
		$title=$_POST['title'];
		$category=$_POST['category'];
		$files=$_FILES['files']['name'];
		$files_tmp=$_FILES['files']['tmp_name'];
		$youtube=$_POST['youtube'];
		
		$status=$_POST['status'];
		
		
		$header="location:../../loginsetup.php?topic=virtuallearningmanager&class=".$classid."&subject=".$subjectid."&unit=".$unitid."&msg=yes";
		$header1="location:../../loginsetup.php?topic=virtuallearningmanager&class=".$classid."&subject=".$subjectid."&unit=".$unitid."&msg=no";
		$path="../../../../files/virtualprogram/";
		
		if($files!=""){
			$files=date('d-M-Y-h-m-s').$files;
			
			
			$check=move_uploaded_file($files_tmp,$path.$files);
			if($check){
				$sql="INSERT INTO `tbl_meterial`(`unitid`, `category`, `title`, `meterial`,`youtube`, `status`, `admin`, `dates`) 
				VALUES ('$unitid','$category','$title','$files','','$status','$admin','$dates')";
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
			$sql="INSERT INTO `tbl_meterial`(`unitid`, `category`, `title`, `meterial`, `youtube`, `status`, `admin`, `dates`) 
				VALUES ('$unitid','$category','$title','','$youtube','$status','$admin','$dates')";
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