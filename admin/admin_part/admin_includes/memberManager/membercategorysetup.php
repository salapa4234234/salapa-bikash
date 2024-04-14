<?php
	//add member type
	
	if(isset($_POST['membertypeadd'])){
		include('../../../../php/db.php');
		
		$memberType=$obj->sql_inject($_POST['type']);
		$slug=strtolower($memberType);
		$slug=str_replace(" ","",$slug);
		$status=$obj->sql_inject($_POST['status']);
		
		$sql="INSERT INTO `tbl_membertype`(`membertype`, `slug`, `status`) 
		VALUES ('$memberType','$slug','$status')";
		$check=$obj->insert($sql);
		if($check){
			session_start();
			$_SESSION['message_success']="Member type added successfully.";
			header('location:../../loginsetup.php?topic=membertype&msg=yes');
		}else{
			session_start();
			$_SESSION['message_error']="Oops try again!!!";
			header('location:../../loginsetup.php?topic=membertype&msg=no');
		}
	}
	
	// edit member type
	
	if(isset($_POST['editmembertype'])){
		include('../../../../php/db.php');
		
		$id=$obj->sql_inject($_POST['id']);
		$memberType=$obj->sql_inject($_POST['type']);
		$status=$obj->sql_inject($_POST['status']);
		
		$sql="UPDATE `tbl_membertype` SET `membertype`='$memberType',
		`status`='$status' WHERE `id`='$id'";
		$check=$obj->insert($sql);
		if($check){
			session_start();
			$_SESSION['message_success']="Member type updated successfully.";
			header('location:../../loginsetup.php?topic=membertype&msg=yes');
		}else{
			session_start();
			$_SESSION['message_error']="Oops try again!!!";
			header('location:../../loginsetup.php?topic=membertype&msg=no');
		}
	}
	
	
	
	
	
	/* ================== code for delete member one ==============================================*/
	if(isset($_POST['deleteMemberType'])){
		include('../../../../php/db.php');
		$id=$_POST['id'];
		$result=$obj->insert("delete from tbl_membertype where id='$id'");
		if($result){
			session_start();
			$_SESSION['message_success']="Member type updated successfully.";
			header('location:../../loginsetup.php?topic=membertype&msg=yes');
		}
		else{
			session_start();
			$_SESSION['message_error']="Oops try again!!!";
			header('location:../../loginsetup.php?topic=membertype&msg=no');
		}
	}
	
	
	/*==================== code for delete member multiple ==========================================*/
	
	if(isset($_POST['deleteMemberTypeMultiple'])){
		include('../../../../php/db.php');
		$row=$_POST['row'];
		for($i=0;$i<$row;$i++){
			$id = $_POST['checkbox'][$i];
			$result=$obj->insert("delete from tbl_membertype where id='$id'");
		}
		if($result){
			session_start();
			$_SESSION['message_success']="Member type updated successfully.";
			header('location:../../loginsetup.php?topic=membertype&msg=yes');
			}
		else{
			session_start();
			$_SESSION['message_error']="Oops try again!!!";
			header('location:../../loginsetup.php?topic=membertype&msg=no');
		}
	}
?>