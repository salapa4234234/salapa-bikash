<?php
	if(isset($_POST['fileedit'])){
		include('../../../../php/db.php');
		
		$admin=$_POST['admin'];
		$id=$_POST['id'];
		$prefile=$_POST['prefile'];
		$topic=$_POST['topic'];
		
		$title=$obj->sql_inject($_POST['title']);
		
		$status=$obj->sql_inject($_POST['status']);
		$feature=$obj->sql_inject($_POST['feature']);
		
		$files=$obj->sql_inject($_FILES['files']['name']);
		$files_temp=$_FILES['files']['tmp_name'];
		$files_error=$_FILES['files']['error'];
		
		$location1="location:../../loginsetup.php?topic=".$topic."&msg=error";
		$location2="location:../../loginsetup.php?topic=".$topic."&msg=file_exist";
		$location3="location:../../loginsetup.php?topic=".$topic."&msg=yes";
		$filePath="../../../../files/multipleupload/";
		
		if($files!=''){
			$prefix=date('d-M-y-h-m-s');
			$files=$prefix.$files;
			if($files_error){
				header($location1);
			}
			else{
				if(file_exists($filePath.$files)){
					header($location2);
				}
				else{
					$check=move_uploaded_file($files_temp,$filePath.$files);/* function calling for image size decrement */
					if($check){
						if($prefile!=""){
							unlink($filePath.$prefile);
						}
						$result=$obj->insert("UPDATE `tbl_file` SET `title`='$title',
						`name`='$files',`status`='$status',`feature`='$feature',
						`admin`='$admin' WHERE `id`='$id' ");
						if($result){
							header($location3);
						}
						else{
							unlink($filePath.$files);
							header($location1);
						}
					}
					else{
						header($location1);
					}
				}
			}
		}
		else{
				$result=$obj->insert("UPDATE `tbl_file` SET `title`='$title',
				`status`='$status',`feature`='$feature', `admin`='$admin' WHERE
				 `id`='$id' ");
				if($result){
					header($location3);
				}
				else{
					header($location1);
				}
			}
		}
?>