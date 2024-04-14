<?php
	include('../../../../php/db.php');
/* ------------------------------ Code For Status Change ----------------------------------*/
	if(isset($_POST['status_change'])){
		$id=$_POST['id'];
		$categorys=$_POST['category'];
		$filter_category=$_POST['filter_category'];
		$status=$_POST['status'];
		
		if($categorys!="" && $filter_category!=""){
			$loca="location:../../loginsetup.php?category=".$categorys."&filter_category=GO";
		}
		else{
			$loca="location:../../loginsetup.php?topic=articles";
		}
		
		if($status==1){
			$status="";
		}
		else{
			$status=1;
		}
		$result=$obj->insert("update tbl_content set status='$status' where id='$id'");
		header($loca);
	}

/* ------------------------------ Code For Status Change ----------------------------------*/
	if(isset($_POST['feature_change'])){
		$id=$_POST['id'];
		$categorys=$_POST['category'];
		$filter_category=$_POST['filter_category'];
		$feature=$_POST['feature'];
		
		if($categorys!="" && $filter_category!=""){
			$loca="location:../../loginsetup.php?category=".$categorys."&filter_category=GO";
		}
		else{
			$loca="location:../../loginsetup.php?topic=articles";
		}
		if($feature==1){
			$feature="";
		}
		else{
			$feature=1;
		}
		$result=$obj->insert("update tbl_content set display_order='$feature' where id='$id'");
		header($loca);
	}
	
/* ------------------------------ Code For Content Change ----------------------------------*/
	if(isset($_POST['article_edit_'])){
		
		global $image;
		global $small_image;
		global $contentFile;
		
		$id=$_POST['id'];
		$prefile=$_POST['prefil'];
		$preimg=$_POST['preimg'];
		$decrase_size=$_POST['decrase_size'];
		$small_image=$_POST['small_image'];
		$size=$_POST['size'];
		
		
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
		$alignment=$_POST['alignment'];
		$display=$obj->sql_inject($_POST['display']);
		$content=$obj->sql_inject($_POST['content']);
		$sources=$obj->sql_inject($_POST['sources']);
		$admin="M ".$_POST['admin'];
		$dates=$_POST['dates'];
		$meta_keyword=$obj->sql_inject($_POST['metakeyword']);
		$meta_data=$obj->sql_inject($_POST['metadata']);
		$meta_description=$obj->sql_inject($_POST['metadescription']);
		
		
		
		
		$location1="location:../../loginsetup.php?topic=articles&task=edit&id=".$id."&msg=error";
		$location2="location:../../loginsetup.php?topic=articles&task=edit&id=".$id."&msg=file_exist";
		$location3="location:../../loginsetup.php?topic=articles&task=edit&id=".$id."&msg=yes";
		$path="../../../../images/content_images/";
		$filePath="../../../../files/contentFile/";
		
		if($contentFile!=""){
			if($prefile!=""){
				unlink($filePath.$prefile);
			}
			$res=$obj->select("Select id from tbl_content where id='$id'");
			$dat=mysqli_fetch_assoc($res);
			$im=$dat['id'];
			$contentFile="1".$im.$contentFile;
			if($contentFileError){
				header($location1);
			}
			else{
				if(file_exists($filePath.$contentFile)){
					header($location2);
				}
				else{
					require('../file_upload/fileUpload.php');
					$fileUploads->simple_upload($contentFile,$contentFileTemp,$filePath);
				}
			}
			
		}
		
		if($image!=""){
			if($preimg!=""){
				unlink($path.$preimg);
			}
			if($small_image!=""){
				unlink($path.$small_image);
			}
			$res=$obj->select("Select id from tbl_content where id='$id'");
			$dat=mysqli_fetch_assoc($res);
			$im=$dat['id'];
			$image="1".$im.$image;
			$small_image="small_".$image;
			if($image_error){
				header($location1);
			}
			else{
				if(file_exists($path.$image)){
					header($location2);
				}
				else{
					require('../file_upload/image_uploads.php');
					$obj_image_upload->upload($image,$image_temp,$path,$size);
				}
			}
		}
		elseif($decrase_size!=$size){
			if($small_image!=""){
				unlink($path.$small_image);
			}
			require('../file_upload/image_uploads.php');
			$check=$obj_image_decrase->decrase($preimg,$path,$size,$small_image);
		}
		
		if($image==""){
			$image=$preimg;
		}
		
		if($contentFile==""){
			$contentFile=$prefile;
		}
		
		/* code for change data into database */
		$result=$obj->insert("UPDATE `tbl_content` SET `metakeyword`='$meta_keyword',`metadata`='$meta_data',
		`metadescription`='$meta_description',`category`='$category',`mtitle`='$mtitle',`title`='$title',`display`='$display',`content`='$content',
		`image`='$image',`small_image`='$small_image',`decrase_size`='$decrase_size',`alignment`='$alignment',
		`files`='$contentFile',`status`='$status',`display_order`='$feature',
		`sources`='$sources',`dates`='$dates',`admin`='$admin' WHERE id='$id'");
		if($result){
			header($location3);
		}
		else{
			header($location1);
		}
		
		
	}
	$obj->sql_close();
?>