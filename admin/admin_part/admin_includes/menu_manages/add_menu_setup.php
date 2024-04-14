<?php
	if(isset($_POST['menu_add'])){
		include('../../../../php/db.php');
		$menu=$obj->sql_inject($_POST['menu']);
		$links=$obj->sql_inject($_POST['links']);
		$position=$_POST['position'];
		$status=$_POST['status'];
		$admin=$_POST['admin'];
		$dates=$_POST['dates'];
		$last=$_POST['end_index'];
		
		if($position==""){
			$position=$last+1;
		}
		
		$result=$obj->insert("INSERT INTO `tbl_menu`( `menu`, `link`, `position`, `status`,`del`,`admin`, `dates`) 
		VALUES ('$menu','$links','$position','$status','1','$admin','$dates')");
		
		if($result){
			header('location:../../loginsetup.php?topic=menu_add&msg=yes');
		}
		else{
			header('location:../../loginsetup.php?topic=menu_add&msg=no');
		}
	}
?>