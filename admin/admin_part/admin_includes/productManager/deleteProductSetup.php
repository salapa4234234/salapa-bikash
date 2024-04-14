<?php
include('../../../../php/db.php');

/*--------------- code for delete single ---------------------------*/
if(isset($_POST['deleteProductSingle'])){
	$id=$_POST['id'];
	$loca="location:../../loginsetup.php?topic=productmanager";
	
	$result=$obj->insert("update tbl_product set del='' where id='$id'");
	if($result){
			header($loca);
		}
		else{
			header($loca);
		}
}


/*--------------- code for delete multiple ---------------------------*/
if(isset($_POST['deleteProductMultiple'])){
	$row=$_POST['row'];
	for($i=0;$i<$row;$i++){
		
		$id = $_POST['checkbox'][$i];
		$result=$obj->insert("update tbl_product set del='' where id='$id'");
		
	}
	if($result){
		header('location:../../loginsetup.php?topic=deleteproduct');
	}
	else{
		header('location:../../loginsetup.php?topic=deleteproduct');
	}
}

/* ---------------- delete parmanently -------------------------------*/

if(isset($_POST['deleteProductPermanent'])){
	$row=$_POST['row'];
	$path="../../../../images/productImages/";
	$path1="../../../../images/multipleupload/";
	for($i=0;$i<$row;$i++){
		$id = $_POST['checkbox'][$i];
		$res=$obj->select("select * from tbl_product where id='$id'");
		$da=mysqli_fetch_assoc($res);
		$img=$da['image'];
		$files=$da['files'];
		if($img!=""){
			unlink($path.$img);
		}
		
		$sql1="select * from tbl_image where parentid='$id' and parenttable='tbl_product'";
		$result1=$obj->select($sql1);
		while($data1=mysqli_fetch_assoc($result1)){
			unlink($path1.$data1['image']);
			$sql2="delete from tbl_image where id='".$data1['id']."'";
			$obj->insert($sql2);
		}
		
		$result=$obj->insert("delete from tbl_product where id='$id'");
	}
	if($result){
			header('location:../../loginsetup.php?topic=trashproduct');
		}
	else{
		header('location:../../loginsetup.php?topic=trashproduct');
	}
}
/*---------------- code for recover -------------------------------*/
if(isset($_POST['recoverProducts'])){
	$row=$_POST['row'];
	for($i=0;$i<$row;$i++){
		$id = $_POST['checkbox'][$i];
		$result=$obj->insert("update tbl_product set del='1' where id='$id'");
	}
	if($result){
			header('location:../../loginsetup.php?topic=trashproduct');
		}
	else{
		header('location:../../loginsetup.php?topic=trashproduct');
	}
}

$obj->sql_close();
?>

