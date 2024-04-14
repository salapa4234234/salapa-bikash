<?php
	if(isset($_POST['menu_add'])){
		include('../../../../php/db.php');
		$menu=$obj->sql_inject($_POST['menu']);
		$category=$obj->sql_inject($_POST['category']);
		$parent=$_POST['parent'];
		$subparent=$_POST['subparent'];
		$links=$obj->sql_inject($_POST['links']);
		$links=strtolower($links);
		$links=str_replace(" ","",$links);
		$position=$_POST['position'];
		$subposition=$_POST['subposition'];
		$childposition=$_POST['childposition'];
		$status=$_POST['status'];
		$feature=$_POST['feature'];
		$admin=$_POST['admin'];
		$dates=$_POST['dates'];
		$menuindex=$_POST['end_index'];
		$submenuindex=$_POST['sub_index'];
		$childindex=$_POST['child_index'];
		
		if($position==""){
			$position=$menuindex+1;
		}
		if($subposition==""){
			$subposition=$submenuindex+1;
		}
		if($childposition==""){
			$childposition=$childindex+1;
		}
		if($category=="menu"){
			$result=$obj->insert("INSERT INTO `tbl_menu`(`menu`, `submenu`, `child`,`link`, 
			`category`, `parent`, `status`, `feature`, `del`, `position`, `dates`, `admin`) 
			VALUES ('$menu','','','$links','$category','',
			'$status','$feature','1','$position','$dates','$admin')");
			if($result){
				header('location:../../loginsetup.php?topic=menu_add&msg=yes');
			}
			else{
				header('location:../../loginsetup.php?topic=menu_add&msg=no');
			}
		}
		else if($category=="submenu"){
			$result=$obj->insert("INSERT INTO `tbl_menu`(`menu`, `submenu`, `child`,`link`, 
			`category`, `parent`, `status`, `feature`, `del`, `position`, `dates`, `admin`) 
			VALUES ('','$menu','','$links','$category','$parent',
			'$status','$feature','1','$submenuindex','$dates','$admin')");
			if($result){
				header('location:../../loginsetup.php?topic=menu_add&msg=yes');
			}
			else{
				header('location:../../loginsetup.php?topic=menu_add&msg=no');
			}
		}
		else if($category=="child"){
			$result=$obj->insert("INSERT INTO `tbl_menu`(`menu`, `submenu`, `child`,`link`, 
			`category`, `parent`, `status`, `feature`, `del`, `position`, `dates`, `admin`) 
			VALUES ('','','$menu','$links','$category','$subparent',
			'$status','$feature','1','$childposition','$dates','$admin')");
			if($result){
				header('location:../../loginsetup.php?topic=menu_add&msg=yes');
			}
			else{
				header('location:../../loginsetup.php?topic=menu_add&msg=no');
			}
		}
	}
?>