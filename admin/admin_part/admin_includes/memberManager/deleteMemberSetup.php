<?php
	include('../../../../php/db.php');
	
	/* ================== code for delete member one ==============================================*/
	if(isset($_POST['deleteMember'])){
		$id=$_POST['id'];
		$result=$obj->insert("update tbl_member set del='' where id='$id'");
		if($result){
			header('location:../../loginsetup.php?topic=member&msg=yes');
		}
		else{
			header('location:../../loginsetup.php?topic=member&msg=no');
		}
	}
	
	
	/*==================== code for delete member multiple ==========================================*/
	
	if(isset($_POST['deleteMemberMultiple'])){
		$row=$_POST['row'];
		for($i=0;$i<$row;$i++){
			$id = $_POST['checkbox'][$i];
			$result=$obj->insert("update tbl_member set del='' where id='$id'");
		}
		if($result){
				header('location:../../loginsetup.php?topic=memberDelete');
			}
		else{
			header('location:../../loginsetup.php?topic=memberDelete');
		}
	}
	/*==================== code for recover form multiple ==========================================*/
	
	if(isset($_POST['recoverMemberMultiple'])){
		$row=$_POST['row'];
		for($i=0;$i<$row;$i++){
			$id = $_POST['checkbox'][$i];
			$result=$obj->insert("update tbl_member set del='1' where id='$id'");
		}
		if($result){
				header('location:../../loginsetup.php?topic=memberTrash');
			}
		else{
			header('location:../../loginsetup.php?topic=memberTrash');
		}
	}
	
	/* ---------------- delete parmanently -------------------------------*/

	if(isset($_POST['deleteMemberPermanent'])){
		$row=$_POST['row'];
		for($i=0;$i<$row;$i++){
			$id = $_POST['checkbox'][$i];
			$memberImage=$_POST['memberImage'][$i];
			if($memberImage!=""){
				$check=unlink("../../../../images/memberImages/".$memberImage);
				if($check){
					$result=$obj->insert("delete from tbl_member where id='$id'");
				}
			}
			else{
				$result=$obj->insert("delete from tbl_member where id='$id'");
			}
		}
		if($result){
				header('location:../../loginsetup.php?topic=memberTrash');
			}
		else{
			header('location:../../loginsetup.php?topic=memberTrash');
		}
	}
	
?>