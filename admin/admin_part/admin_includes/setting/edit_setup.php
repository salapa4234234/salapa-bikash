<?php
	include('../../../../php/db.php');
	$location="location:../../loginsetup.php?topic=setting&sub=profile&msg=file_farmat";
	$location1="location:../../loginsetup.php?topic=setting&sub=profile&msg=file_exists";
	$location2="location:../../loginsetup.php?topic=setting&sub=profile&msg=yes";
	$location3="location:../../loginsetup.php?topic=setting&sub=profile&msg=no";
	$location4="location:../../loginsetup.php?topic=setting&sub=profile&msg=nooo";
	
	$path="../../../../images/themImages/";
	
	
 	/************************* code for password Edit ******************************/
	if(isset($_POST['change_password']))
		{
			$id=$_POST['id'];
			$old=$_POST['old'];
			$old=md5($old);
			$new=$_POST['new'];
			$new1=$_POST['new1'];
			
			if($new==$new1)
			{
			$new=md5($new);
			$result=$obj->select("select * from tbl_admin where id='$id' and password='$old'");
			$row=mysqli_num_rows($result);
			if($row>0)
				{
					$result=$obj->insert("update tbl_admin set password='$new' where id='$id'");
					if($result)
						{
							header('location:../../logout.php?topic=p_change');
						}
					else
						{
							header($location3);
						}
				}
			else
				{
					header($location4);
				}
			}
			else
				{
					header($location4);
				}
		}
	/************************* code for Change Profile Picture ******************************/
	if(isset($_POST['change_pic']))
		{
			$id=$_POST['id'];
			$old=$_POST['old'];
			$image=$_FILES['image']['name'];
			$img_tmp=$_FILES['image']['tmp_name'];
			$img_type=$_FILES['image']['type'];
			
			if($image!="")
			{
			if(!file_exists($path.$image))
				{
					if(($img_type!="image/jpg")
					&& ($img_type !="image/jpeg")
					&& ($img_type !="image/gif")
					&& ($img_type !="image/png")
					&& ($img_type !="image/kmcy")
					&& ($img_type !="image/pds")
					&& ($img_type !="image/tif"))
					{
						header($location);	
					}
					else
						{
							if($old!=""){
								unlink($path.$old);
							}
							$check=move_uploaded_file($img_tmp, $path.$image);
							if($check)
								{
									$result=$obj->insert("update tbl_admin set 
									image='$image' where id='$id'");
									if($result)
										{
											session_start();
											$_SESSION['userImage']=$image;
											header($location2);
										}
									else
										{
											header($location3);
										}								
								}
							else
								{
									//header($location3);
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
				header($location3);
			}
			
		}
	/************************* code for Change Mobile Number *****************************/
	if(isset($_POST['change_mobile']))
		{
			$id=$_POST['id'];
			$new=$_POST['new'];
			
			$result=$obj->insert("update tbl_admin set contact='$new' where id='$id'");
			if($result)
				{
					header($location2);
				}
			else
				{
					header($location3);
				}
			
		}
	/************************* code for Change Email address *****************************/
	if(isset($_POST['change_email']))
		{
			$id=$_POST['id'];
			$new=$_POST['new'];
			
			$result=$obj->insert("update tbl_admin set username='$new' where id='$id'");
			if($result)
				{
					header($location2);
				}
			else
				{
					header($location3);
				}
			
		}
	/************************* code for Change Name *****************************/
	if(isset($_POST['name_change']))
		{
			$id=$_POST['id'];
			$new=$_POST['new'];
			
			$result=$obj->insert("update tbl_admin set name='$new' where id='$id'");
			if($result)
				{
					session_start();
					$_SESSION['userName']=$new;
					header($location2);
				}
			else
				{
					header($location3);
				}
			
		}
	/************************* code for Change address *****************************/
	if(isset($_POST['address_change']))
		{
			$id=$_POST['id'];
			$new=$_POST['new'];
			
			$result=$obj->insert("update tbl_admin set address='$new' where id='$id'");
			if($result)
				{
					header($location2);
				}
			else
				{
					header($location3);
				}
			
		}
	/************************* code for Change address *****************************/
	if(isset($_POST['Gender_change']))
		{
			$id=$_POST['id'];
			$new=$_POST['new'];
			
			$result=$obj->insert("update tbl_admin set gender='$new' where id='$id'");
			if($result)
				{
					header($location2);
				}
			else
				{
					header($location3);
				}
			
		}
	/************************* code for Change Company  *****************************/
	if(isset($_POST['Change_Company']))
		{
			$id=$_POST['id'];
			$new=$_POST['new'];
			
			$result=$obj->insert("update tbl_admin set work='$new' where id='$id'");
			if($result)
				{
					header($location2);
				}
			else
				{
					header($location3);
				}
			
		}
	if(isset($_POST['Change_position']))
		{
			$id=$_POST['id'];
			$new=$_POST['new'];
			
			$result=$obj->insert("update tbl_admin set position='$new' where id='$id'");
			if($result)
				{
					header($location2);
				}
			else
				{
					header($location3);
				}
			
		}
?>