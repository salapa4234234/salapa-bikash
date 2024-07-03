<?php
	include('../../../../php/db.php');
/* ------------------------------ Code For Status Change ----------------------------------*/
	if(isset($_POST['status_change'])){
		$id=$_POST['id'];
		$status=$_POST['status'];
		
		if($categorys!="" && $filter_category!=""){
			$loca="location:../../loginsetup.php?category=branches&filter_category=GO";
		}
		else{
			$loca="location:../../loginsetup.php?topic=branches";
		}
		
		if($status==1){
			$status="";
		}
		else{
			$status=1;
		}
		$result=$obj->insert("update tbl_branches set status='$status' where id='$id'");
		header($loca);
	}

/* ------------------------------ Code For feature Change ----------------------------------*/
	if(isset($_POST['feature_change'])){
		$id=$_POST['id'];
		$feature=$_POST['feature'];
		
		if($categorys!="" && $filter_category!=""){
			$loca="location:../../loginsetup.php?category=branches&filter_category=GO";
		}
		else{
			$loca="location:../../loginsetup.php?topic=branches";
		}
		if($feature==1){
			$feature="";
		}
		else{
			$feature=1;
		}
		$result=$obj->insert("update tbl_branches set feature='$feature' where id='$id'");
		header($loca);
	}
	
/* ------------------------------ Code For branch update ----------------------------------*/
	if(isset($_POST['updateBranch'])){
				
		$id=$_POST['id'];

        $category=$obj->sql_inject($_POST['category']);
		$branchName=$obj->sql_inject($_POST['branchName']);
		$branchAddress=$obj->sql_inject($_POST['branchAddress']);
		
		$gioLocation=$obj->sql_inject($_POST['gioLocation']);
		$contact=$obj->sql_inject($_POST['contact']);
		$email=$obj->sql_inject($_POST['email']);
		$contactPersion=$obj->sql_inject($_POST['contactPersion']);
		$status=$obj->sql_inject($_POST['status']);
		$feature=$obj->sql_inject($_POST['feature']);
		$publishedDate=$_POST['dates'];
		$publishedBy="M ".$_POST['admin'];
		
		
		
		
		$location1="location:../../loginsetup.php?topic=branches&msg=error";
		$location2="location:../../loginsetup.php?topic=branches&msg=yes";
		
		/* code for change data into database */
        $sql="UPDATE `tbl_branches` SET 
        `category`='$category',
        `name`='$branchName',
        `address`='$branchAddress',
        `gioLocation`='$gioLocation',
        `contact`='$contact',
        `email`='$email',
        `contactPersion`='$contactPersion',
        `status`='$status',
        `feature`='$feature',
        `publishedDate`='$publishedDate',
        `publishedBy`='$publishedBy' 
        WHERE `id`='$id'";

		$result=$obj->insert($sql);
		if($result){
			header($location2);
		}
		else{
			header($location1);
		}
		
		
	}
	$obj->sql_close();
?>