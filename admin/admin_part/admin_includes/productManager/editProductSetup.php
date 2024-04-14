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
			$loca="location:../../loginsetup.php?topic=productmanager";
		}
		
		if($status==1){
			$status="";
		}
		else{
			$status=1;
		}
		$result=$obj->insert("update tbl_product set status='$status' where id='$id'");
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
			$loca="location:../../loginsetup.php?topic=productmanager";
		}
		if($feature==1){
			$feature="";
		}
		else{
			$feature=1;
		}
		$result=$obj->insert("update tbl_product set feature='$feature' where id='$id'");
		header($loca);
	}
	
/* ------------------------------ Code For Content Change ----------------------------------*/
	if(isset($_POST['producteditor'])){
		
		global $image;
		global $small_image;
		global $contentFile;
		$id=$_POST['id'];
		$admin=$_POST['admin'];
		$dates=$_POST['dates'];
		$preimg=$_POST['preimg'];
		
		$productname=$_POST['productname'];
		$productcategory=$_POST['productcategory'];
		$currency=$_POST['currency'];
		$productprice=$_POST['productprice'];
		$scale=$_POST['scale'];
		$suplyability=$_POST['suplyability'];
		$paymentterms=$_POST['paymentterms'];
		$deliverydetails=$_POST['deliverydetails'];
		$mobile=$_POST['mobile'];
		$email=$_POST['email'];
		$website=$_POST['website'];
		$facebook=$_POST['facebook'];
		$offer=$_POST['offer'];
		$position=$_POST['position'];
		$status=$_POST['status'];
		$feature=$_POST['feature'];
		$content=$_POST['content'];
		$image=$_FILES['image']['name'];
		$image_tmp=$_FILES['image']['tmp_name'];
		
		$path="../../../../images/productImages/";
		
		$location1="location:../../loginsetup.php?topic=productmanager&msg=no";
		$location2="location:../../loginsetup.php?topic=productmanager&msg=file_exist";
		$location3="location:../../loginsetup.php?topic=productmanager&msg=yes";
		
		if($image!=""){
			if($preimg!=""){
				unlink($path.$preimg);
			}
			$im=date('d-M-Y-h-m-s');
			$image=$im.$image;
			if(file_exists($path.$image)){
				header($location2);
			}
			else{
				require('../file_upload/image_uploads.php');
				move_uploaded_file($image_tmp,$path.$image);
			}
		}
		
		if($image==""){
			$image=$preimg;
		}
		
		/* code for change data into database */
		$result=$obj->insert("UPDATE `tbl_product` SET `productname`='$productname',
		`productcategory`='$productcategory',`currency`='$currency',
		`productprice`='$productprice',`scale`='$scale',`suplyability`='$suplyability',
		`paymentterms`='$paymentterms',`deliverydetails`='$deliverydetails',`mobile`='$mobile',
		`email`='$email',`website`='$website',`facebook`='$facebook',`offer`='$offer',
		`description`='$content',`position`='$position',`status`='$status',`feature`='$feature',
		`image`='$image',`admin`='$admin',`date`='$dates' WHERE id='$id'");
		if($result){
			header($location3);
		}
		else{
			header($location1);
		}
		
		
	}
	$obj->sql_close();
?>