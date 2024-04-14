<?php
	include('../../../../php/db.php');
	if(isset($_POST['deactive_event'])){
		$dates=$_POST['dates'];
		$admin=$_POST['admin'];
		
		$location1="location:../../loginsetup.php?topic=event_festible_remove&msg=yes";
		$location2="location:../../loginsetup.php?topic=event_festible_remove&msg=no";
		
		$result=$obj->insert("update tbl_event set event_status='', 
		tweet_status='', dates='$dates', admin='$admin'");
		if($result){
			header($location1);	
		}
		else{
			header($location2);	
		}
	}
?>