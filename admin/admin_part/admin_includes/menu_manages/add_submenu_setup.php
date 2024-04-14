<?php
	if(isset($_POST['submenu_add'])){
		include('../../../../php/db.php');
		$menu=$obj->sql_inject($_POST['menu']);
		$links=$obj->sql_inject($_POST['links']);
		$parent=$_POST['parent'];
		$position=$_POST['position'];
		$status=$_POST['status'];
		$admin=$_POST['admin'];
		$dates=$_POST['dates'];
		$last=$_POST['end_index'];
		
		if($position==""){
			$position=$last+1;
		}
		
		$result=$obj->insert("INSERT INTO `tbl_menu`( `submenu`, `link`,`parent`, `position`, `status`,`del`,`admin`, `dates`) 
		VALUES ('$menu','$links','$parent','$position','$status','1','$admin','$dates')");
		
		if($result){
			header('location:../../loginsetup.php?topic=submenu_add&msg=yes');
		}
		else{
			header('location:../../loginsetup.php?topic=submenu_add&msg=no');
		}
	}
?>