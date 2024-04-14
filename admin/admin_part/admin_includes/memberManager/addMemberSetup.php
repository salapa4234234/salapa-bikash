<?php
	if(isset($_POST['memberAdd'])){
		include('../../../../php/db.php');
		include('../file_upload/fileUpload.php');
		
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
		
		$location1="location:../../loginsetup.php?topic=memberAdd&msg=error";
		$location2="location:../../loginsetup.php?topic=memberAdd&msg=file_exist";
		$location3="location:../../loginsetup.php?topic=memberAdd&msg=yes";
		$imagePath="../../../../images/memberImages/";
		
		if($image!=''){
			$res=$obj->select("Select id from tbl_member order by id desc limit 1");
			$dat=mysqli_fetch_assoc($res);
			$im=$dat['id']+1;
			$image="0".$im.$image;
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
						$result=$obj->insert("INSERT INTO `tbl_member`(`membertypeid`, `memberName`, `position`, `address`, 
						`contact`, `email`, `content`,`image`, `status`, `feature`,`displayposition`, `del`, `admins`, `dates`) 
						VALUES ('$memberType','$name','$positon','$address','$contact','$email',
						'$content','$image','$status','$feature','$displayposition','1','$admin','$dates')");
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
				$result=$obj->insert("INSERT INTO `tbl_member`( `membertypeid`, `memberName`, `position`, `address`, 
				`contact`, `email`, `content`, `status`, `feature`,`displayposition`, `del`, `admins`, `dates`) 
				VALUES ('$memberType','$name','$positon','$address','$contact','$email',
				'$content','$status','$feature','$displayposition','1','$admin','$dates')");
				if($result){
					header($location3);
				}
				else{
					header($location1);
				}
		}
	}
?>