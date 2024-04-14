<?php
	if(isset($_POST['admin_delete']))
		{
			include('../../../../php/db.php');
			$id=$_POST['id'];
			$old=$_POST['old'];
			$thisid=$_POST['thisid'];
			
			$location1="location:../../loginsetup.php?topic=setting&task=deleteuser&msg=yes";
			$location2="location:../../loginsetup.php?topic=setting&task=deleteuser&msg=no";
			$location3="location:../../logout.php?topic=p_change";
			$location4="location:../../loginsetup.php?topic=setting&sub=delete&msg=under";
			
			$path="../../../../images/themImages/";
			
			$result=$obj->select("select * from tbl_admin");
			$row=mysqli_num_rows($result);
			if($row>1)
			{
				if($old=="")
					{
						$result=$obj->insert("delete from tbl_admin where id='$id'");
						if($result)
							{
								header($location1);
							}
						else
							{
								header($location2);
							}
					}
				else
					{
						$check=unlink($path.$old);
						if($check)
							{
								$result=$obj->insert("delete from tbl_admin where id='$id'");
								if($result)
									{
										header($location1);
									}
								else
									{
										header($location2);
									}
							}
						else
							{
								header($location2);
							}
					}
			}
		}
?>