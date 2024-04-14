<?php
	if(isset($_POST['memberEdit'])){
		include('../../../../php/db.php');
		include('../file_upload/fileUpload.php');
		
		$id=$_POST['id'];
		$preimage=$_POST['preimage'];
		
		$memberType=$obj->sql_inject($_POST['memberType']);
		$name=$obj->sql_inject($_POST['name']);
		$positon=$obj->sql_inject($_POST['position']);
		$address=$obj->sql_inject($_POST['address']);
		$contact=$obj->sql_inject($_POST['contact']);
		$email=$obj->sql_inject($_POST['email']);
		$status=$obj->sql_inject($_POST['status']);
		$feature=$obj->sql_inject($_POST['feature']);
		$displayposition=$obj->sql_inject($_POST['displayposition']);
		
		$image=$obj->sql_inject($_FILES['image']['name']);
		$image_temp=$_FILES['image']['tmp_name'];
		$image_error=$_FILES['image']['error'];
		
		
		$content=$obj->sql_inject($_POST['content']);
		$admin=$_POST['admin'];
		$dates=$_POST['dates'];
		
		$location1="location:../../loginsetup.php?topic=member&task=edit&id=".$id."&msg=error";
		$location2="location:../../loginsetup.php?topic=member&task=edit&id=".$id."&msg=file_exist";
		$location3="location:../../loginsetup.php?topic=member&msg=yes";
		$imagePath="../../../../images/memberImages/";
		
		if($image!=''){
			$res=$obj->select("Select id from tbl_member order by id desc limit 1");
			$dat=mysqli_fetch_assoc($res);
			$im=$dat['id']+1;
			$image="edit".$im.$image;
			if($image_error){
				header($location1);
			}
			else{
				if(file_exists($imagePath.$image)){
					header($location2);
				}
				else{
					$check=$fileUploads->simple_upload($image,$image_temp,$imagePath); /* function calling for image size decrement */
					if($check){
						if($preimage!=""){
							unlink($imagePath.$preimage);
						}
						$result=$obj->insert("UPDATE `tbl_member` SET `membertypeid`='$memberType',
						 `memberName`='$name',`position`='$positon',
						`address`='$address',`contact`='$contact',`email`='$email',`content`='$content',
						`image`='$image',`status`='$status',`feature`='$feature',
						`displayposition`='$displayposition' WHERE id='$id' ");
						if($result){
							header($location3);
						}
						else{
							unlink('../../../../files/formsFile/$image');
							header($location1);
						}
					}
					else{
						header($location1);
					}
				}
			}
		}
		else{
				$result=$obj->insert("UPDATE `tbl_member` SET `membertypeid`='$memberType',
				 `memberName`='$name',`position`='$positon',
						`address`='$address',`contact`='$contact',`email`='$email',`content`='$content',
						`status`='$status',`feature`='$feature',`displayposition`='$displayposition' WHERE id='$id' ");
				if($result){
					header($location3);
				}
				else{
					header($location1);
				}
			}
		}
?>