<?php
	
/* ------------------------------ Code For Status Change ----------------------------------*/
	if(isset($_POST['status_change'])){
		include('../../../../php/db.php');
		
		$id=$_POST['id'];
		$status=$_POST['status'];
		if($status==1){
			$status="";
		}
		else{
			$status=1;
		}
		$result=$obj->insert("update tbl_menu set status='$status' where id='$id'");
		header('location:../../loginsetup.php?topic=menu');
	}
	
/* ------------------------------ Code For Feature Change ----------------------------------*/
	if(isset($_POST['feature_change'])){
		include('../../../../php/db.php');
		
		$id=$_POST['id'];
		$feature=$_POST['feature'];
		if($feature==1){
			$feature="";
		}
		else{
			$feature=1;
		}
		$result=$obj->insert("update tbl_menu set feature='$feature' where id='$id'");
		header('location:../../loginsetup.php?topic=menu');
	}
	
	
/* ------------------------------ Code For edit menu ----------------------------------*/
if(isset($_POST['menu_edit'])){
	
		include('../../../../php/db.php');
		$id=$_POST['id'];
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
		$menuindex=$_POST['sub_index'];
		$menuindex=$_POST['child_index'];
		$nemeric_position=$_POST['nemeric_position'];
		
		if($position==""){
			$position=$menuindex+1;
		}
		if($subposition==""){
			$subposition=$submenuindex+1;
		}
		if($childposition==""){
			$childposition=$childindex+1;
		}
		
		if($nemeric_position!=""){
			$position=$nemeric_position;
			$subposition=$nemeric_position;
			$childposition=$nemeric_position;
		}
		
		if($category=="menu"){
			$result=$obj->insert("UPDATE `tbl_menu` SET `menu`='$menu',`submenu`='',`child`='',
			`link`='$links',`category`='$category',`parent`='',`status`='$status',
			`feature`='$feature',`del`='1',`position`='$position',`dates`='$dates',
			`admin`='$admin' WHERE id='$id'");
			if($result){
				header('location:../../loginsetup.php?topic=menu&msg=yes');
			}
			else{
				header('location:../../loginsetup.php?topic=menu&msg=no');
			}
		}
		else if($category=="submenu"){
			$result=$obj->insert("UPDATE `tbl_menu` SET `menu`='',`submenu`='$menu',`child`='',
			`link`='$links',`category`='$category',`parent`='$parent',`status`='$status',
			`feature`='$feature',`del`='1',`position`='$subposition',`dates`='$dates',
			`admin`='$admin' WHERE id='$id'");
			if($result){
				header('location:../../loginsetup.php?topic=menu&msg=yes');
			}
			else{
				header('location:../../loginsetup.php?topic=menu&msg=no');
			}
		}
		else if($category=="child"){
			$result=$obj->insert("UPDATE `tbl_menu` SET `menu`='',`submenu`='',`child`='$menu',
			`link`='$links',`category`='$category',`parent`='$subparent',`status`='$status',
			`feature`='$feature',`del`='1',`position`='$childposition',`dates`='$dates',
			`admin`='$admin' WHERE id='$id'");
			if($result){
				header('location:../../loginsetup.php?topic=menu&msg=yes');
			}
			else{
				header('location:../../loginsetup.php?topic=menu&msg=no');
			}
		}
	}
?>