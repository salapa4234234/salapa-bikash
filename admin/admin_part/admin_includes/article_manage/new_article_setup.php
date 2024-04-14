<?php
	if(isset($_POST['article_add'])){
		include('../../../../php/db.php');
		include('../file_upload/image_uploads.php');
		include('../file_upload/fileUpload.php');
		
		global $small_image;
		global $image;
		global $contentFile;
		
		$meta_keyword=$obj->sql_inject($_POST['metakeyword']);
		$meta_data=$obj->sql_inject($_POST['metadata']);
		$meta_description=$obj->sql_inject($_POST['metadescription']);
		
		$mtitle=$obj->sql_inject($_POST['mtitle']);
		$title=$obj->sql_inject($_POST['title']);
		$category=$obj->sql_inject($_POST['category']);
		$status=$obj->sql_inject($_POST['status']);
		$feature=$obj->sql_inject($_POST['feature']);
		$contentFile=$obj->sql_inject($_FILES['contentFile']['name']);
		$contentFileTemp=$_FILES['contentFile']['tmp_name'];
		$contentFileError=$_FILES['contentFile']['error'];
		$image=$obj->sql_inject($_FILES['image']['name']);
		$image_temp=$_FILES['image']['tmp_name'];
		$image_error=$_FILES['image']['error'];
		$size=$_POST['size'];
		$alignment=$_POST['alignment'];
		$content=$obj->sql_inject($_POST['content']);
		$display=$obj->sql_inject($_POST['display']);
		$sources=$obj->sql_inject($_POST['sources']);
		$admin=$_POST['admin'];
		$dates=$_POST['dates'];
		
		$location1="location:../../loginsetup.php?topic=new_article&msg=error";
		$location2="location:../../loginsetup.php?topic=new_article&msg=file_exist";
		$location3="location:../../loginsetup.php?topic=new_article&msg=yes";
		$imagePath="../../../../images/content_images/";
		$filePath="../../../../files/contentFile/";
		
		if($image!=''){
			$res=$obj->select("Select id from tbl_content order by id desc limit 1");
			$dat=mysqli_fetch_assoc($res);
			$im=$dat['id']+1;
			$image="0".$im.$image;
			$small_image="small_".$image;
			if($image_error){
				header($location1);
			}
			else{
				if(file_exists($imagePath.$image)){
					header($location2);
				}
				else{
					$obj_image_upload->upload($image,$image_temp,$imagePath,$size); /* function calling for image size decrement */					
				}
			}
		}
		if($contentFile!=""){
			$res=$obj->select("Select id from tbl_content order by id desc limit 1");
			$dat=mysqli_fetch_assoc($res);
			$im=$dat['id']+1;
			$contentFile="0".$im.$contentFile;
			if($contentFileError){
				header($location1);
			}
			else{
				if(file_exists($filePath.$contentFile)){
					header($location2);
				}
				else{
					$fileUploads->simple_upload($contentFile,$contentFileTemp,$filePath); /* function calling for upload file*/					
				}
			}
		}
		
		/* code for add data into database */
		$result=$obj->insert("INSERT INTO `tbl_content`(`metakeyword`, `metadata`, `metadescription`, 
		`category`, `mtitle`, `title`, `display`,`content`, `image`, `small_image`, `decrase_size`, `alignment`, 
		`files`, `viewer`, `status`, `del`, `display_order`, `sources`, `dates`, `admin`)
		VALUES ('$meta_keyword','$meta_data','$meta_description','$category','$mtitle','$title','$display','$content',
		'$image','$small_image','$size','$alignment','$contentFile','0','$status',
		'1','$feature','$sources','$dates','$admin')");
		if($result){
			header($location3);
		}
		else{
			header($location1);
		}
	}
?>