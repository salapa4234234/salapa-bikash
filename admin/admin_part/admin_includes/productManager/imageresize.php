<?php
	if(isset($_POST['productadder'])){
		require_once'../../../../php/db.php';
		require_once'../file_upload/imagemanipulator.php';
		
		$stallnumber=$_POST['stallnumber'];
		$ownername=$_POST['ownername'];
		$organization=$_POST['organization'];
		$category=$_POST['category'];
		$address=$_POST['address'];
		$phone=$_POST['phone'];
		$mobile=$_POST['mobile'];
		$email=$_POST['email'];
		$website=$_POST['website'];
		$facebook=$_POST['facebook'];
		$offer=$_POST['offer'];
		$position=$_POST['position'];
		$status=$_POST['status'];
		$feature=$_POST['feature'];
		$content=$_POST['content'];
		$image=$_FILES['image']['name'];
		$image_tmp=$_FILES['image']['tmp_name'];
		
		$admin=$_POST['admin'];
		$dates=$_POST['dates'];
		
		$path="../../../../images/productImages/";
		
		$location1="location:../../loginsetup.php?topic=addproduct&msg=fileexist";
		$location2="location:../../loginsetup.php?topic=addproduct&msg=no";
		$location3="location:../../loginsetup.php?topic=addproduct&msg=yes";
		if($image!=""){
			$sql="select * from tbl_product order by id desc";
			$result=$obj->select($sql);
			$data=mysqli_fetch_assoc($result);
			$id=$data['id']+1;
			$image=$id.$image;
			
			if(file_exists($path.$image)){
				header($location1);
			}
			
			if ($_FILES['image']['error'] > 0) {
				header($location2);
			} else {
				// array of valid extensions
				$validExtensions = array('.jpg', '.jpeg', '.gif', '.png');
				// get extension of the uploaded file
				$fileExtension = strrchr($_FILES['image']['name'], ".");
				// check if file Extension is on the list of allowed ones
				if (in_array($fileExtension, $validExtensions)) {
					$manipulator = new ImageManipulator($_FILES['image']['tmp_name']);
					// resizing to 200x200
					$newImage = $manipulator->resample(300, 300);
					// saving file to uploads folder
					$manipulator->save($path.$image);
					if($position==""){
						$position=1;
					}
					$sql="INSERT INTO `tbl_product`(`istallnumber`, `ownername`, `organization`, 
					`category`, `address`, `phone`, `mobile`, `email`, `website`, `facebook`, 
					`offer`, `description`, `position`, `status`, `feature`, `del`, `image`, `admin`) 
					VALUES ('$stallnumber','$ownername','$organization','$category','$address','$phone',
					'$mobile','$email','$website','$facebook','$offer','$content', '$position','$status',
					'$feature','1','$image','$admin')";
					$check=$obj->insert($sql);
					if($check){
							$sql="select * from tbl_product where position>'$position'";
							$result=$obj->select($sql);
							while($data=mysqli_fetch_assoc($result)){
								$id=$data['id'];
								$sql1="update tbl_product set position='$position' where id='$id'";
								$obj->insert($sql1);
								$position=$position+1;						
							}
						header($location3);
					}
					else{
						header($location2);
					}
				} else {
					header($location2);
				}
			}
			

			
		}
		else{
			$sql="INSERT INTO `tbl_product`(`istallnumber`, `ownername`, `organization`, 
				`category`, `address`, `phone`, `mobile`, `email`, `website`, `facebook`, 
				`offer`, `description`, `position`, `status`, `feature`, `del`, `admin`) 
				VALUES ('$stallnumber','$ownername','$organization','$category','$address','$phone',
				'$mobile','$email','$website','$facebook','$offer','$content','$position','$status',
				'$feature','1','$admin')";
			$check=$obj->insert($sql);
			if($check){
				header($location3);
			}
			else{
				header($location2);
			}
		}
	}
?>