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
		header('location:../../loginsetup.php?topic=submenu');
	}
	
	
/* ------------------------------ Code For edit menu ----------------------------------*/
if(isset($_POST['submenu_edit'])){
	
		include('../../../../php/db.php');
		$id=$_POST['id'];
		$menu=$obj->sql_inject($_POST['menu']);
		$links=$obj->sql_inject($_POST['links']);
		$position=$_POST['position'];
		$parent=$_POST['parent'];
		$status=$_POST['status'];
		$admin="M"." ".$_POST['admin'];
		$dates=$_POST['dates'];
		$last=$_POST['end_index'];
		$nemeric_position=$_POST['nemeric_position'];
		
		if($nemeric_position!=""){
			$position=$nemeric_position;
		}
		elseif($position==""){
				$position=$last+1;
		}
		
		$result=$obj->insert("update tbl_menu set submenu='$menu',link='$links' , 
		parent='$parent', status='$status', position='$position', admin='$admin',dates='$dates' where id='$id'");
		
		if($result){
			header('location:../../loginsetup.php?topic=submenu&msg=yes');
		}
		else{
			header('location:../../loginsetup.php?topic=submenu&ymsg=no');
		}
	}
?>