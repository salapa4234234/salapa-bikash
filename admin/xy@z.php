<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Panel</title>
<link href="../them_img/icon.png" rel="shortcut icon"/>


<script type="text/javascript">
<!--
// Form validation code will come here.
function validate()
{
   if( document.admin_pannel.username.value == "" )
   {
     alert( "Please Enter Your Username!" );
     document.admin_pannel.username.focus() ;
	 document.admin_pannel.username.style.backgroundColor="#FDD";
     return false;
   }
   if( document.admin_pannel.password.value == "" )
   {
     alert( "Please Enter Your Password!" );
     document.admin_pannel.password.focus() ;
	 document.admin_pannel.password.style.backgroundColor="#FDD";
     return false;
   }
   if( document.admin_pannel.captcha.value == "" )
   {
     alert( "Please Enter Given Captcha!" );
     document.admin_pannel.captcha.focus() ;
	 document.admin_pannel.captcha.style.backgroundColor="#FDD";
     return false;
   }
   return( true );
}
</script>

</head>

<body>
	<style type="text/css">
		*{margin:0 auto;}
		body{
			background:#999;}
		#wrapper{
			width:400px;
			background:#FFF;
			margin-top:100px;}
		.header{
			height:80px;}
		.left_header{
			width:18%;
			float:left;}
		.left_header img{
			width:55px;}
		.center_header{
			width:60%;
			float:left;
			text-align:center;}
		.center_header h2{
			letter-spacing:5px;
			color:#066;
			margin-top:15px;}
		.center_header h3{
			letter-spacing:3px;
			color:#066;}
		.right_header{
			width:20%;
			float:left;}
		.right_header img{
			width:77px;
			margin-top:2px;}
		.menu{
			height:30px;
			font-size:12px;
			line-height:30px;
			color:#FFF;
			background:#034454;
			font-weight:bold;
			text-align:center;}
		.content{
			width:100%;}
		.content table{
			width:95%;
			color:#069;
			margin-top:5px;}
		.content table td{
			padding:7px 0px;}
		.content table td input{
			width:280px;
			height:27px;
			float:right;}
		.footer{
			height:30px;
			font-size:16px;
			line-height:30px;
			color:#FFF;
			background:#034454;
			font-weight:bold;
			text-align:center;}
	</style>
	<div id="wrapper">
    	<div class="header">
            <div class="right_header">
            	<img src="../images/themImages/admin23@1.jpg" style="margin:2px 0px 0px 15px;"/>
            </div>
            <div class="center_header">
            	<h2>Welcome To</h2>
                <h3>Admin Panel</h3>
            </div>
            <div class="right_header">
            </div>
        </div>
        <div class="menu">
        	Please Don't Try To Open With Wrong Username And Password!!!
        </div>
        <div class="content">
        	<table>
            <form action="admin_part/login.php" method="post" name="admin_pannel" onsubmit="return(validate());">
            	<tr>
                	<td>
                    	Username:-
                    </td>
                    <td>
                    	<input type="text" name="username" id="username" placeholder="Enter your username?" />
                    </td>
                </tr>
                <tr>
                	<td>
                    	Password:-
                    </td>
                    <td>
                    	<input type="password" name="password" id="password" placeholder="Enter Your Password?" />
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                    	<div class="captcha" style="float:left; height:33px; background:url(../them_img/captcha.jpg); border-radius:5px;">
                    	<h2 style="text-align:center; letter-spacing:8px; padding:0px 5px;  display:inline; line-height:33px; color:#CCC;">
                        	
							<?php
								include('../php/db.php');
								$id= rand(1,8);
								$result=$obj->select("select * from tbl_captcha where id='$id'");
								$data=mysqli_fetch_assoc($result);
								echo $data['captcha'];
							?>
                        </h2>
                        </div>
                        <input type="hidden" name="c_id" value="<?php echo $data['id']; ?>" />
                        <input type="text" name="captcha" id="captcha" placeholder="Enter The Given Captch." style="width:190px;" />
                    </td>
                </tr>
                <tr>
                	<td colspan="2">
                    	<input type="submit" name="admin_login" value="Login" style="border:none; height:30px; 
                        width:100px; background:#034454; color:#FFF; font-weight:bold; cursor:pointer;" />
                    </td>
                </tr>
                </form>
            </table>
        </div>
        <div class="footer">
        	<p>&copy; BTech Nep<a href="xy@z.php">a</a>l</p>
        </div>
    </div>
</body>
</html>