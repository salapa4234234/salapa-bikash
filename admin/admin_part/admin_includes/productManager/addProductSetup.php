<?php
	if(isset($_POST['productadder'])){
		include('../../../../php/db.php');
		$productname=$_POST['productname'];
		$productcategory=$_POST['productcategory'];
		$currency=$_POST['currency'];
		$productprice=$_POST['productprice'];
		$scale=$_POST['scale'];
		$suplyability=$_POST['suplyability'];
		$paymentterms=$_POST['paymentterms'];
		$deliverydetails=$_POST['deliverydetails'];
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
			$prefix=date('m-d-Y-h-i-s', time());
			$image=$prefix.$image;
			
			if(file_exists($path.$image)){
				header($location1);
			}
			if(move_uploaded_file($image_tmp,$path.$image)){
				if($position==""){
					$position=1;
				}
				$sql="INSERT INTO `tbl_product`(`productname`, `productcategory`, `currency`, `productprice`,
				`scale`, `suplyability`, `paymentterms`, `deliverydetails`, `mobile`, 
				`email`, `website`, `facebook`, `offer`, `description`, `position`, `status`, 
				`feature`, `del`, `image`, `admin`, `date`) 
				VALUES ('$productname','$productcategory','$currency','$productprice',
				'$scale','$suplyability','$paymentterms',
				'$deliverydetails','$mobile','$email','$website','$facebook','$offer',
				'$content','$position','$status','$feature',
				'1','$image','$admin','$dates')";
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
			}
			else{
				header($location2);
			}
			
		}
		else{
			$sql="INSERT INTO `tbl_product`(`productname`, `productcategory`, `currency`, `productprice`, 
				`scale`, `suplyability`, `paymentterms`, `deliverydetails`, `mobile`, 
				`email`, `website`, `facebook`, `offer`, `description`, `position`, `status`, 
				`feature`, `del`, `admin`, `date`) 
				VALUES ('$productname','$productcategory','$currency','$productprice',
				'$scale','$suplyability','$paymentterms',
				'$deliverydetails','$mobile','$email','$website','$facebook','$offer',
				'$content','$position','$status','$feature',
				'1','$admin','$dates')";
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