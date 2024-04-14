<?php
	if(isset($_POST['video_add'])){
		include('../../../../php/db.php');
		
		
		$admin=$_POST['admin'];
		$dates=$_POST['dates'];
		$type=$_POST['types'];
		$url=$obj->sql_inject($_POST['url']);
		$title=$obj->sql_inject($_POST['title']);
		$status=$_POST['status'];
		$feature=$_POST['feature'];
		
		$result=$obj->insert("INSERT INTO `tbl_video`(`id`, `videos`, `title`, `types`, `image`, 
		`status`, `feature`, `del`, `admin`, `dates`) values('','$url','$title','$type','',
		'$status','$feature','1','$admin','$dates')");
		
		if($result){
			header('location:../../loginsetup.php?topic=video_add&msg=yes');
		}
		else{
			header('location:../../loginsetup.php?topic=video_add&msg=no');
		}
	}
?>