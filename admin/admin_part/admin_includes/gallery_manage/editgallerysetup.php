<?php
	if(isset($_POST['gallery_add'])){
		include('../../../../php/db.php');
		$gallery=$obj->sql_inject($_POST['gallery']);
		$categorys=$_POST['categorys'];
		$position=$_POST['position'];
		$num_position=$_POST['num_position'];
		$end_index=$_POST['end_index'];
		$status=$_POST['status'];
		$feature=$_POST['feature'];
		$admin=$_POST['admin'];
		$dates=$_POST['dates'];
		$id=$_POST['id'];
		
		$location1="location:../../loginsetup.php?topic=gallery&msg=yes";
		$location2="location:../../loginsetup.php?topic=gallery&msg=no";
		
		
		if($position=="" && $num_position==""){
			$position=$end_index+1;
		}
		elseif($num_position!=""){
			$position=$num_position;
		}
		else{
			$position=$position;
		}
		
		$result=$obj->insert("UPDATE `tbl_gallery_category` SET `category`='$categorys',`gallery_name`='$gallery',
		`position`='$position',`status`='$status',`feature`='$feature',`admin`='$admin',`dates`='$dates' WHERE id='$id'");
		
		if($result){
			header($location1);
		}
		else{
			header($location2);
		}
		
	}
?>