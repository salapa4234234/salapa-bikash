<?php
	if(isset($_GET['task'])){
		$task=$_GET['task'];
	}
	else{
		$task="no";
	}
?>


<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 rightBill" style=" width:75%; margin:0px; padding:0px; float:left;">
	<?php
		if($task=="profile" || $task=="no"){
			include('admin_includes/setting/generalSetting.php');
		}
		elseif($task=="deleteuser" && $userAuthority=="yes"){
			include('admin_includes/setting/userDelete.php');
		}
		elseif($task=="adduser" && $userAuthority=="yes"){
			include('admin_includes/setting/addUser.php');
		}
		elseif($task=="userauthority" && $userAuthority=="yes"){
			include('admin_includes/setting/userAuthority.php');
		}
		/*USER AUTHORITY*/
		elseif($task=="deleteuser" && $userAuthority!="yes"){
			include('../../accessDenied.php');
		}
		elseif($task=="adduser" && $userAuthority!="yes"){
			include('../../accessDenied.php');
		}
		elseif($task=="userauthority" && $userAuthority!="yes"){
			include('../../accessDenied.php');
		}
	?>
</div>
<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 rightMenu" style="margin-top:7px; padding:0px; float:left; width:24.5%;">

	<li style="background:#099; height:30px; line-height:30px; color:#FFF;
     font-weight:bold; font-size:14px; ">SETTING</li>
    
    <a href="loginsetup.php?topic=setting&task=profile"><li>General setting</li></a>
    <a href="loginsetup.php?topic=setting&task=adduser"><li>Add new user</li></a>
    <a href="loginsetup.php?topic=setting&task=deleteuser"><li>Remove user</li></a>
	<a href="loginsetup.php?topic=setting&task=userauthority"><li>User Authority </li></a>
</div>