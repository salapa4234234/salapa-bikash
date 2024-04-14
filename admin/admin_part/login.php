<?php
	session_start();
	if(isset($_POST['admin_login'])){
			
		include('../../php/db.php');
		$username=$obj->sql_inject($_POST['username']);
		$password=$obj->sql_inject($_POST['password']);
		
		$password=md5($password);
		$c_id=$_POST['c_id'];
		$captcha=$_POST['captcha'];
		$result=$obj->select("Select * from tbl_admin where username='$username' and password='$password' and status='1'");
		$row=mysqli_num_rows($result);
		$data=mysqli_fetch_assoc($result);
	
		if($row>0){
			// code for captcha 
			$cresult=$obj->select("select * from tbl_captcha where id='$c_id' and captcha='$captcha'");
			$crow=mysqli_num_rows($cresult);
				
			if($crow>0){
				$_SESSION['user']=$data['name'];
				$_SESSION['id']=$data['id'];
				$_SESSION['image']=$data['image'];
				$_SESSION['userImage']=$data['image'];
				$_SESSION['userId']=$data['id'];
				$_SESSION['userName']=$data['name'];
				$_SESSION['userAuthority']=$data['authority'];
				header('location:loginsetup.php');
			}
			else{
				header('location:../index.php?msg=captchainvalid');
			}
		}
		else{
			header('location:../index.php?msg=userinvalid');
		}
	}
	else{
		header('location:../index.php?msg=userinvalid');
	}
?>