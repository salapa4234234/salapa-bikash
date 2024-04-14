<?php
	if(isset($_POST['delete_image'])){
		require_once '../../../../php/db.php';
		
		$id=$_POST['id'];
		$parentid=$_POST['parentid'];
		$topic=$_POST['topic'];
		$image=$_POST['image'];
		
		$location1="location:../../loginsetup.php?topic=".$topic."&task=removeimage&id=".$parentid."&msg=yes";
		$location2="location:../../loginsetup.php?topic=".$topic."&task=removeimage&id=".$parentid."&msg=no";
		
		$path="../../../../images/multipleupload/";
		
		$check=unlink($path.$image);
		if($check){
			$sql="delete from tbl_image where id='".$id."'";
			$obj->insert($sql);
			header($location1);
		}
		else{
			header($location2);
		}
		
	}
?>