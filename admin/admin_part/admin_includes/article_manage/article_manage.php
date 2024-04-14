<?php
	if(isset($_GET['task']) && isset($_GET['id'])){
		$task=$_GET['task'];
		$id=$_GET['id'];
	}
	else{
		$task="no";
		$id="no";
	}
	if($task=="no" && $id=="no" && !isset($_GET['filter_category'])){
			include('admin_includes/article_manage/all_article.php');
		}
	elseif(isset($_GET['filter_category'])){
			include('admin_includes/article_manage/filter_article.php');
	}
	elseif($task=="edit"){
		include('admin_includes/article_manage/edit_article.php');
	}
	elseif($task=="view"){
		include('admin_includes/article_manage/viewArticle.php');		
	}
?>