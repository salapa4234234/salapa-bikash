<?php
	if(isset($_POST['category_add'])){
		include('../../../../php/db.php');
		$category=$obj->sql_inject($_POST['category']);
		$links=$obj->sql_inject($_POST['links']);
		$position=$_POST['position'];
		$status=$_POST['status'];
		$admin=$_POST['admin'];
		$dates=$_POST['dates'];
		$last=$_POST['end_index'];
		
		if($position==""){
			$position=$last+1;
		}
		
		$result=$obj->insert("INSERT INTO `tbl_category`( `category`, `link`, `position`, `status`,`del`,`admin`, `dates`) 
		VALUES ('$category','$links','$position','$status','1','$admin','$dates')");
		
		if($result){
			header('location:../../loginsetup.php?topic=category_add&task=add&msg=yes');
		}
		else{
			header('location:../../loginsetup.php?topic=category_add&task=add&msg=no');
		}
	}
?>