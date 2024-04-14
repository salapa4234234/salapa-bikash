<?php
	include('../../../../php/db.php');
	include('../file_upload/image_uploads.php');
	if(isset($_POST['updateCompanyProfile'])){
		$id=$_POST['id'];
		$preLogo=$_POST['preLogo'];
		$companyName=$obj->sql_inject($_POST['companyName']);
		$companyAddress=$obj->sql_inject($_POST['companyAddress']);
		$websiteTitle=$obj->sql_inject($_POST['websiteTitle']);
		$companyURL=$obj->sql_inject($_POST['companyURL']);
		$companyLogo=$_FILES['companyLogo']['name'];
		$logoTemp=$_FILES['companyLogo']['tmp_name'];
		$lotoError=$_FILES['companyLogo']['error'];
		$logoType=$_FILES['companyLogo']['type'];
		$phoneNumber=$_POST['phoneNumber'];
		$mobileNumber=$_POST['mobileNumber'];
		$email1=$obj->sql_inject($_POST['email1']);
		$email2=$obj->sql_inject($_POST['email2']);
		$email3=$obj->sql_inject($_POST['email3']);
		$companyMap=$obj->sql_inject($_POST['companyMap']);
		$facebookPage=$obj->sql_inject($_POST['facebookPage']);
		$twitterFollow=$obj->sql_inject($_POST['twitterFollow']);
		$googlePlus=$obj->sql_inject($_POST['googlePlus']);
		$youtubeVideo=$obj->sql_inject($_POST['youtubeVideo']);
		$skyep=$obj->sql_inject($_POST['skyep']);
		$metaKeyword=$obj->sql_inject($_POST['metaKeyword']);
		$metaData=$obj->sql_inject($_POST['metaData']);
		$metaContent=$obj->sql_inject($_POST['metaContent']);
		$copyRight=$obj->sql_inject($_POST['copyRight']);
		$poweredBy=$obj->sql_inject($_POST['poweredBy']);
		
		$path="../../../../them_img/";
		

		if($companyLogo!=""){
			if($preLogo!=""){
				unlink($path.$preLogo);
			}
			$companyLogo=date('d-M-Y-h-m-s').$companyLogo;
			
			$check=$obj_just_upload->simple_upload($companyLogo,$logoTemp,$path);
			
			$result=$obj->insert("UPDATE `tbl_companyprofile` SET `companyName`='$companyName',
			`companyAddress`='$companyAddress', `websiteTitle`='$websiteTitle',`companyURL`='$companyURL',
				`companyLogo`='$companyLogo',`phoneNumber`='$phoneNumber',`mobileNumber`='$mobileNumber',`email1`='$email1',
				`email2`='$email2',`email3`='$email3',`companyMap`='$companyMap',`facebookPage`='$facebookPage',
				`twitterFollow`='$twitterFollow',`googlePlus`='$googlePlus',`youtubeVideo`='$youtubeVideo',`skyep`='$skyep',
				`metaKeyword`='$metaKeyword',`metaData`='$metaData',`metaContent`='$metaContent',
				`copyRight`='$copyRight',`poweredBy`='$poweredBy' WHERE id='$id'");
			if($result){
				header('location:../../loginsetup.php?topic=profile&msg=yes');
			}
			else{
				header('location:../../loginsetup.php?topic=profile&msg=no');
			}
		}
		else{		
			$result=$obj->insert("UPDATE `tbl_companyprofile` SET `companyName`='$companyName',
			`companyAddress`='$companyAddress', `websiteTitle`='$websiteTitle',`companyURL`='$companyURL',
					`phoneNumber`='$phoneNumber',`mobileNumber`='$mobileNumber',`email1`='$email1',
					`email2`='$email2',`email3`='$email3',`companyMap`='$companyMap',`facebookPage`='$facebookPage',
					`twitterFollow`='$twitterFollow',`googlePlus`='$googlePlus',`youtubeVideo`='$youtubeVideo',`skyep`='$skyep',
					`metaKeyword`='$metaKeyword',`metaData`='$metaData',`metaContent`='$metaContent',
					`copyRight`='$copyRight',`poweredBy`='$poweredBy' WHERE id='$id'");
			if($result){
				header('location:../../loginsetup.php?topic=profile&msg=yes');
			}
			else{
				header('location:../../loginsetup.php?topic=profile&msg=no');
			}
		}
	}
?>