<?php
	include('../../../../php/db.php');
	if(isset($_POST['set_event'])){
		$dates=$_POST['dates'];
		$admin=$_POST['admin'];
		$event_name=$obj->sql_inject($_POST['event_name']);
		$event_status=$_POST['event_status'];
		$tweet_status=$_POST['tweet_status'];
		$event_year=$_POST['event_year'];
		$event_month=$_POST['event_month'];
		$event_day=$_POST['event_day'];
		$event_greeting=$obj->sql_inject($_POST['event_greeting']);
		
		$location1="location:../../loginsetup.php?topic=event_festible&msg=yes";
		$location2="location:../../loginsetup.php?topic=event_festible&msg=no";
		
		if($event_day>0 && $event_day<10){
			$event_day="0".$event_day;
		}
		if($event_month>0 && $event_month<10){
			$event_month="0".$event_month;
		}
		if($event_year!="" && $event_month!="" && $event_day!=""){
			$event_date=$event_year."-".$event_month."-".$event_day;
		}
		$res=$obj->select("select * from tbl_event");
		$row=mysqli_num_rows($res);
		if($row>0){
			$result=$obj->insert("update tbl_event set event_name='$event_name', event_status='$event_status', 
			tweet_status='$tweet_status', event_date='$event_date', event_greeting='$event_greeting', 
			dates='$dates', admin='$admin'");
			if($result){
				header($location1);	
			}
			else{
				header($location2);	
			}
		}
		else{
			$result=$obj->insert("INSERT INTO tbl_event(`id`, `event_name`, `event_status`, `tweet_status`,
			`event_date`, `event_greeting`, `dates`, `admin`) 
			VALUES ('','$event_name','$event_status','$tweet_status','$event_date','$event_greeting','$dates','$admin')");
			if($result){
				header($location1);	
			}
			else{
				header($location2);
			}
		}
	}
?>