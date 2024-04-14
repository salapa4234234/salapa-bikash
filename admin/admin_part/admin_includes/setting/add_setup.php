<?php
if(isset($_POST['Sign_up']))
	{
		include('../../../../php/db.php');
		$name=$obj->sql_inject($_POST['name']);
		$address=$obj->sql_inject($_POST['address']);
		$gender=$_POST['gender'];
		$profile=$obj->sql_inject($_FILES['profile']['name']);
		$pro_tmp=$_FILES['profile']['tmp_name'];
		$pro_type=$_FILES['profile']['type'];
		$company=$obj->sql_inject($_POST['company']);
		$position=$obj->sql_inject($_POST['position']);
		$contact=$obj->sql_inject($_POST['contact']);
		$email=$obj->sql_inject($_POST['email']);
		$password=$obj->sql_inject($_POST['password']);
		$password1=$obj->sql_inject($_POST['password1']);
		$path="../../../../images/themImages/";
		
		$location="location:../../loginsetup.php?topic=setting&msg=file_farmat";
		$location1="location:../../loginsetup.php?topic=setting&msg=file_exists";
		$location2="location:../../loginsetup.php?topic=setting&msg=yes";
		$location3="location:../../loginsetup.php?topic=setting&msg=no";
		$location4="location:../../loginsetup.php?topic=setting&msg=nooo";
	if($password==$password1)
	{
		$password=md5($password);
		if($profile!="")
			{
			if(!file_exists($path.$profile))
			{
				if(($pro_type!="image/jpg")
				&& ($pro_type !="image/jpeg")
				&& ($pro_type !="image/gif")
				&& ($pro_type !="image/png")
				&& ($pro_type !="image/kmcy")
				&& ($pro_type !="image/pds")
				&& ($pro_type !="image/tif"))
				{
					header($location);	
				}
				else
					{
						$resu=$obj->select("select * from tbl_admin order by id desc limit 1");
						$da=mysqli_fetch_assoc($resu);
						$im=$da['id'];
						$profile=$im.$profile;
						$check=move_uploaded_file($pro_tmp,$path.$profile);
						if($check)
							{
								$result=$obj->insert("insert into tbl_admin (`name`, `address`, `gender`, `image`,
								 `work`, `position`, `contact`, `username`, `password`,`status`,`authority`) 
								values('$name','$address','$gender','$profile','$company',
								'$position','$contact','$email','$password','1','no')");
								if($result)
									{
										header($location2);
									}
								else
									{
										header($location3);
									}								
							}
						else
							{
								header($location3);
							}
					}
			}
			else
			{
				header($location1);
			}
			}
		else
			{
				$result=$obj->insert("insert into tbl_admin(`name`, `address`, `gender`, `image`,
								 `work`, `position`, `contact`, `username`, `password`,`status`,`authority`)
				values('$name','$address','$gender','','$company',
				'$position','$contact','$email','$password','1','no')");
				if($result)
					{
						header($location2);
					}
				else
					{
						header($location3);
					}	
				
			}
		}
	else
	{
		header($location4);
	}
		
	}
?>