<?php
	if(isset($_POST['faq_add'])){
		include('../../../../php/db.php');
		$question=$obj->sql_inject($_POST['question']);
		$answer=$obj->sql_inject($_POST['answer']);
		$status=$_POST['status'];
		$feature=$_POST['feature'];
		$admin=$_POST['admin'];
		$dates=$_POST['dates'];
		$publisher=$_POST['admin'];
		
		$result=$obj->insert("INSERT INTO `tbl_faq`(`id`,`question`, `answer`, `status`,`feature`,`del`, 
		`dates`, `publisher`) VALUES ('','$question','$answer','$status','$feature','1','$dates','$publisher')");
		if($result){
			header('location:../../loginsetup.php?topic=faq_add&msg=yes');
		}
		else{
			header('location:../../loginsetup.php?topic=faq_add&msg=no');
		}
		
	}
?>