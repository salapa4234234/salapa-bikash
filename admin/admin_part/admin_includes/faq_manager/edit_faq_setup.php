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
		$result=$obj->insert("update tbl_faq set status='$status' where id='$id'");
		header('location:../../loginsetup.php?topic=faq');
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
		$result=$obj->insert("update tbl_faq set feature='$feature' where id='$id'");
		header('location:../../loginsetup.php?topic=faq');
	}
	
	
/* ------------------------------ Code For edit menu ----------------------------------*/
if(isset($_POST['faq_edit'])){
	
		include('../../../../php/db.php');
		echo "<br> ".$id=$_POST['id'];
		echo "<br> ".$question=$obj->sql_inject($_POST['question']);
		echo "<br> ".$answer=$obj->sql_inject($_POST['answer']);
		echo "<br> ".$status=$_POST['status'];
		echo "<br> ".$feature=$_POST['feature'];
		echo "<br> ".$admin=$_POST['admin'];
		echo "<br> ".$dates=$_POST['dates'];
		
		
		$result=$obj->insert("UPDATE `tbl_faq` SET `question`='$question',`answer`='$answer',`status`='$status',
		`feature`='$feature',`dates`='$dates',
		`publisher`='$admin' WHERE id='$id'");
		if($result){
			header('location:../../loginsetup.php?topic=faq&msg=yes');
		}
		else{
			header('location:../../loginsetup.php?topic=faq&msg=no');
		}
	}
?>