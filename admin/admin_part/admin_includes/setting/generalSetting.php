
<?php
	//$id=$_SESSION['id'];
	$result=$obj->select("select * from tbl_admin where id='$userId'");
	$datas=mysqli_fetch_assoc($result);

	if(isset($_GET['msg']))
		{
			$msg=$_GET['msg'];
			if($msg=="nooo")
			{
				echo "<script type='text/javascript'>alert('Password Not Match!!!');</script>";
			}
			elseif($msg=="under")
			{
				echo "<script type='text/javascript'> alert('Not Deleted , Because Last Account!!!');</script>";
			}
		}
?>

<?php
	if(isset($_GET['sub']))
		{
			$sub=$_GET['sub'];
		}
	else
		{
			$sub="profile";
		}
	if($sub=="add")
		{
?>

<?php
		}
	if($sub=="profile")
		{
			if(isset($_GET['edit']))
				{
					$edit=$_GET['edit'];
				}
			else
				{
					$edit="no";
				}
?>
<style>
	.pro tr td{width:16%; text-align:left; font-weight:bold; font-size:12px; border-bottom:1px solid #DDF;}
	.pro tr th{font-weight:normal; text-align:left; padding:13px 0px; text-align:left; font-size:12px; border-bottom:1px solid #DDF;}
	.pro tr td a{color:#069; text-decoration:none; padding:5px; font-size:12px;}
	.pro tr th input, .pro tr td input{font-size:11px;}
	.pro tr td a:hover{
		color:#FFF;
		background:#09C;
		text-decoration:none;
		padding:5px;}
</style>
<table cellpadding="0" cellspacing="0" width="100%" class="pro">
	<tr>
    	<td style="min-height:90px; border:none;"> 
        <?php
			if($edit=="pic")
				{
		?>
        	<form action="admin_includes/setting/edit_setup.php" 
            method="post" enctype="multipart/form-data">
            	<input type="hidden" name="old" value="<?php echo $datas['image']; ?>" />
                <input type="hidden" name="id" value=" <?php echo $datas['id']; ?>" />
                Select New Image
                <input type="file" name="image" style="width:100%; margin:2px 0px;"/> <br />
                <input type="submit" name="change_pic" value="Change" 
                onclick="return sure_change()"
                style=" cursor:pointer; margin:2px 0px; width:78px;"/>
            </form>
        <?php
				}
			else
				{
		?>
        	<a href="loginsetup.php?topic=setting&sub=profile&edit=pic" style="background:#FFF;">
                <img src="../../images/themImages/<?php if($datas['image']!=""){ echo $datas['image']; }else{echo "admin23@1.gif";}?>" 
                height="50" style="padding:5px; 
                border:1px solid #CCF;"/>
            </a>
        <?php
				}
		?>
        </td>
    	<th style="font-weight:bold; color:#369; padding-top:50px; border:none;" colspan="2">
        	<h5><?php echo $datas['name']; ?></h5>
        </th>
    </tr>
    <tr>
    	<td colspan="3" style="height:20px; margin:0px; background:#369; padding:0px;"></td>
    </tr>
    <tr>
    	<td>Name</th>
        <th>
			<?php
				if($edit=="name")
					{
			?>
            	<form action="admin_includes/setting/edit_setup.php" method="post">
                	<input type="hidden" name="id" value=" <?php echo $datas['id']; ?>" />
                	<input type="text" name="new" 
                    value="<?php echo $datas['name']; ?>" size="50"/>                    
                    <input type="submit" name="name_change" value="Change" 
                    onclick="return sure_change()"
                    style="margin-left:20px; cursor:pointer"/>
                </form>
            <?php
					}
				else
					{
						echo $datas['name'];
					}
			?>
        </th>
        <td>
        	<a href="loginsetup.php?topic=setting&sub=profile&edit=name">
                <img src="them_img/pencil.gif" />
            </a>
        </td>
    </tr>
    <tr>
    	<td>Address</th>
        <th>
			<?php
				if($edit=="address")
					{
			?>
            	<form action="admin_includes/setting/edit_setup.php" method="post">
                	<input type="hidden" name="id" value=" <?php echo $datas['id']; ?>" />
                	<input type="text" name="new" 
                    value="<?php echo $datas['address']; ?>" size="50"/>                    
                    <input type="submit" name="address_change" value="Change" 
                    onclick="return sure_change()"
                    style="margin-left:20px; cursor:pointer"/>
                </form>
            <?php
					}
				else
					{
						echo $datas['address'];
					}
			?>
        </th>
        <td>
        	<a href="loginsetup.php?topic=setting&sub=profile&edit=address">
        		
                <img src="them_img/pencil.gif" />
            </a>
        </td>
    </tr>
    <tr>
    	<td>Gender</th>
        <th>
        	<?php
				if($edit=="gender")
					{
						$sex=$datas['gender'];
			?>
            	<form action="admin_includes/setting/edit_setup.php" method="post">
                	<input type="hidden" name="id" value=" <?php echo $datas['id']; ?>" />
                	<select name="new" style="width:200px;">
                    	<option value="">Select Gender</option>
                        <option value="Male"
						<?php
							 if($sex=="Male")
							 	{
									echo  "selected='selected'";
								}
						?> 
                        >Male</option>
                        <option value="Female"
                        <?php
							 if($sex=="Female")
							 	{
									echo  "selected='selected'";
								}
						?> 
                        >Female</option>
                    </select>                 
                    <input type="submit" name="Gender_change" value="Change" 
                    onclick="return sure_change()"
                    style="margin-left:20px; cursor:pointer"/>
                </form>
            <?php
					}
				else
					{
						echo $datas['gender'];
					}
			?>
        </th>
       <td>
        	<a href="loginsetup.php?topic=setting&sub=profile&edit=gender">
        		
                <img src="them_img/pencil.gif" />
            </a>
        </td>
    </tr>
    <tr>
    	<td>Mobile</th>
        <th>
        	<?php
				if($edit=="mobile")
					{
			?>
            	<form action="admin_includes/setting/edit_setup.php" method="post">
                	<input type="hidden" name="id" value=" <?php echo $datas['id']; ?>" />
                	<input type="text" name="new" 
                    value="<?php echo $datas['contact']; ?>" size="50"/>                    
                    <input type="submit" name="change_mobile" value="Change" 
                    onclick="return sure_change()"
                    style="margin-left:20px; cursor:pointer"/>
                </form>
            <?php
					}
				else
					{
						echo $datas['contact'];
					}
			?>
        </th>
        <td>
        	<a href="loginsetup.php?topic=setting&sub=profile&edit=mobile">
        		
                <img src="them_img/pencil.gif" />
            </a>
        </td>
    </tr>
    <tr>
    	<td>Email</th>
        <th>
			<?php
				if($edit=="email")
					{
			?>
            	<form action="admin_includes/setting/edit_setup.php" method="post">
                	<input type="hidden" name="id" value=" <?php echo $datas['id']; ?>" />
                	<input type="text" name="new" 
                    value="<?php echo $datas['username']; ?>" size="50"/>                    
                    <input type="submit" name="change_email" value="Change" 
                    onclick="return sure_change()"
                    style="margin-left:20px; cursor:pointer"/>
                </form>
            <?php
					}
				else
					{
						echo $datas['username'];
					}
			?>
        </th>
        <td>
        	<a href="loginsetup.php?topic=setting&sub=profile&edit=email">
        		
                <img src="them_img/pencil.gif" />
            </a>
        </td>
    </tr>
    <tr>
    	<td>Password</th>
        <th>
			<?php
				if($edit=="password")
					{
			?>
            	<form action="admin_includes/setting/edit_setup.php" method="post">
                	<input type="hidden" name="id" value=" <?php echo $datas['id']; ?>" />
                	Old Password &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <input type="password" name="old"/><br />
                    New Password &nbsp; &nbsp; &nbsp; &nbsp; 
                    <input type="password" name="new" style="margin:5px 0px;"/><br />
                    Confirm Me &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <input type="password" name="new1"/> 
                    <input type="submit" name="change_password" value="Change" 
                    onclick="return sure_change()"
                    style="margin-left:20px; cursor:pointer"/>
                </form>
            <?php
					}
				else
					{
			?>
            	**********
            <?php
					}
			?>
        </th>
        <td>
        	<a href="loginsetup.php?topic=setting&sub=profile&edit=password">
                
                <img src="them_img/pencil.gif" />
            </a>
        </td>
    </tr>
    <tr>
    	<td>Worked At</th>
        <th>
        	<?php
				if($edit=="work")
					{
			?>
            	<form action="admin_includes/setting/edit_setup.php" method="post">
                	<input type="hidden" name="id" value=" <?php echo $datas['id']; ?>" />
                	<input type="text" name="new" 
                    value="<?php echo $datas['work']; ?>" size="50"/>                    
                    <input type="submit" name="Change_Company" value="Change" 
                    onclick="return sure_change()"
                    style="margin-left:20px; cursor:pointer"/>
                </form>
            <?php
					}
				else
					{
						echo $datas['work'];
					}
			?>
        </th>
        <td>
        	<a href="loginsetup.php?topic=setting&sub=profile&edit=work">
        		
                <img src="them_img/pencil.gif" />
            </a>
        </td>
    </tr>
    <tr>
    	<td>Position</th>
        <th>
        	<?php
				if($edit=="position")
					{
			?>
            	<form action="admin_includes/setting/edit_setup.php" method="post">
                	<input type="hidden" name="id" value=" <?php echo $datas['id']; ?>" />
                	<input type="text" name="new" 
                    value="<?php echo $datas['position']; ?>" size="50"/>                    
                    <input type="submit" name="Change_position" value="Change" 
                    onclick="return sure_change()"
                    style="margin-left:20px; cursor:pointer"/>
                </form>
            <?php
					}
				else
					{
						echo $datas['position'];
					}
			?>
        </th>
        <td>
        	<a href="loginsetup.php?topic=setting&sub=profile&edit=position">
        		
                <img src="them_img/pencil.gif" />
            </a>
        </td>
    </tr>
</table>
<?php
		}
?>