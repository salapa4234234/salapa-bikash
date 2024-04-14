<?php
	include('../../../../php/db.php');
	if(isset($_POST['sureAuthority'])){
		$user=$_POST['user'];
		$authority=$_POST['authority'];
		
		$location1="location:../../loginsetup.php?topic=setting&task=userauthority&msg=yes";
		$location2="location:../../loginsetup.php?topic=setting&task=userauthority&msg=no";
		
		if($authority=="deactive"){
			$result=$obj->insert("update tbl_admin set status='' where id='$user'");
			if($result){
				header($location1);
			}
			else{
				header($location2);
			}
		}
		else{
			$result=$obj->insert("update tbl_admin set authority='$authority' where id='$user'");
			if($result){
				header($location1);
			}
			else{
				header($location2);
			}
		}
	}
?>