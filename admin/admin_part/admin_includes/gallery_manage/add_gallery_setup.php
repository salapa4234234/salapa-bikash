<?php
	if(isset($_POST['gallery_add'])){
		include('../../../../php/db.php');
		$gallery=$obj->sql_inject($_POST['gallery']);
		$categorys=$_POST['categorys'];
		$position=$_POST['position'];
		$num_position=$_POST['num_position'];
		$end_index=$_POST['end_index'];
		$status=$_POST['status'];
		$admin=$_POST['admin'];
		$dates=$_POST['dates'];
		
		$location1="location:../../loginsetup.php?topic=gallery_add&msg=yes";
		$location2="location:../../loginsetup.php?topic=gallery_add&msg=no";
		
		
		if($position=="" && $num_position==""){
			$position=$end_index+1;
		}
		elseif($num_position!=""){
			$position=$num_position;
		}
		else{
			$position=$position;
		}
		
		$result=$obj->insert("INSERT INTO `tbl_gallery_category`( `category`, `gallery_name`, `position`,
		`status`, `feature`, `del`, `admin`, `dates`) VALUES ('$categorys','$gallery','$position','$status',
		'0','1','$admin','$dates')");
		
		if($result){
			header($location1);
		}
		else{
			header($location2);
		}
		
	}
?>