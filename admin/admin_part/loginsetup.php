<?php
	session_start();
	include('../../php/db.php'); 
	if(isset($_GET['topic'])){
		$topic=$_GET['topic'];
	}
	else{
		$topic="articles";
	}
	$userName=$_SESSION['userName'];
	$userImage=$_SESSION['userImage'];
	$userId=$_SESSION['userId'];
	$userAuthority=$_SESSION['userAuthority'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Panel</title>
<link href="../../them_img/icon.png" rel="shortcut icon"/>

<!-- link for multiple file upload -->
<!-- End multiple file upload -->

<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/fontface.css">

<link rel="stylesheet" type="text/css" href="style/style.css"/>



<!-- link for Validation and confirmation -->
<script type="text/javascript" src="js/validate.js"></script>	
<script type="text/javascript" src="js/f_confirm.js"></script>	
<!-- End link for Validation -->

<!-- link for ckeditor -->
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script src="ckeditor/_samples/sample.js" type="text/javascript"></script>
<link href="ckeditor/_samples/sample.css" rel="stylesheet" type="text/css" />
<!-- End link for ckeditor -->

<!--- link for left sidebar -->


<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/paccordion.js"></script>

</head>

<body>
	<?php
		if(isset($_SESSION['user'])){
	?>
	<div id="wrapper">
    	<div class="fixeds">
            <div class="header">
                <div class="left_header">
                    <li><a href="../../np/admin/admin_part/loginsetup.php">Nepali</a></li>
                    <li style="background:#6C0;"><a href="">
                    English</a></li>
                    <li><a href="loginsetup.php?topic=complain">Complain</a></li>
                    <li><a href="loginsetup.php?topic=help">Help</a></li>
                </div>
                <div class="right_header">
                    <ul>
                        <li><img src="them_img/logout.png" />
                        <a href="logout.php">Logout</a></li>
                        <li><img src="them_img/view.png" height="30" />
                        <a href="../../" target="_blank">View Site</a></li>
                        <li><img src="them_img/admin.png" />
                        <a href="">Admin</a></li>
                        <li><img src="them_img/visitor.png" />
                        <a href="">Visitor</a></li>
                    </ul>
                </div>
            </div>
            <div class="menu">
                <div class="left_menu">
                    <div class="top_menu">
                    <a href="loginsetup.php?topic=new_article">
                        <div class="menus">
                            <img src="them_img/article.jpg" /><br />
                            New Article
                        </div>
                    </a>
                    <a href="loginsetup.php?topic=articles">
                        <div class="menus">
                            <img src="them_img/articles.jpg" /><br />
                            Articles
                        </div>
                    </a>
                    <a href="loginsetup.php?topic=clientmanager">
                        <div class="menus">
                            <img src="them_img/online.png" /><br />
                            Online Form
                        </div>
                    </a>
                    <a href="loginsetup.php?topic=menu">
                        <div class="menus">
                            <img src="them_img/menu.jpg" /><br />
                            Menus
                        </div>
                    </a>
                    <a href="loginsetup.php?topic=gallery">
                        <div class="menus">
                            <img src="them_img/gallery.png" /><br />
                            Gallery
                        </div>
                    </a>
                    <div class="clear"></div>
                    </div>
                    <div class="buttom_menu">
                    <a href="loginsetup.php?topic=advertise">
                        <div class="menus">
                            <img src="them_img/investor.png" /><br />
                            Investor Relations
                        </div>
                    </a>
                    <a href="loginsetup.php?topic=branches">
                        <div class="menus">
                            <img src="them_img/branches.png" /><br />
                            Branches
                        </div>
                    </a>
                    <a href="loginsetup.php?topic=member">
                        <div class="menus">
                            <img src="them_img/admin.jpg" /><br />
                            Members
                        </div>
                    </a>
                    <a href="loginsetup.php?topic=setting">
                        <div class="menus">
                            <img src="them_img/setting.jpg" /><br />
                            Setting
                        
                        </div>
                    </a>
                    
                    <a href="loginsetup.php?topic=profile">
                        <div class="menus">
                            <img src="them_img/profile.jpg" /><br />
                            Profile
                        </div>
                    </a>
                </div>
                <div class="clear"></div>
                </div>
                <div class="right_welcome">
                    <p>
                    <span style=" font-size:1.3em; color:#069; 
                    padding:33px 5px 0px 5px;">Welcome:-</span>
                        <?php 
                            echo $userName;
                        ?>
                    </p>
                    <?php
                        if($userImage==""){
                    ?>
                        <img src="them_img/admi.gif" height="60" 
                        style="display:inline;" />
                    <?php
                        }
                        else{
                    ?>
                    <img src="../../images/themImages/<?php 
					echo $userImage; ?>" height="60" style="display:inline;" />
                    <?php
                        }
                    ?>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="container" style="margin:0px; padding:0px;">
        	<div class="left_menubar">
            	<div style="margin:0px 0px 0px 5px;">
                	<div class="left_head" style=" margin-bottom:8px;">
                    	<h2 style="font-size:1.2em; margin:0px;
                        margin-top:10px; padding:0px;">
                            <span style="font-size:25px;">
                            &laquo;&laquo;&laquo;&laquo;&laquo;</span>
                            &nbsp; MENUS &nbsp;
                            <span style="font-size:25px;">
                            &raquo;&raquo;&raquo;&raquo;&raquo;</span>
                        </h2>
                    </div>
                	<?php include('includes/left_menu.php'); ?>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="right_contentbar">
                <div class="working" style="line-height:30px; 
                background:#5591af; box-shadow:0px 3px 3px #333;
                font-size:1.3em; font-weight:bold; color:#FFF; 
                margin-left:20px; padding-left:5px;">  	
                	<p style="float:left; padding:0px; margin:0px;">
                        <button onclick="goBack()" 
                        style="border:none; background:none; 
                        cursor:pointer; padding-top:5px; ">&laquo; pre</button>
                    </p>
                    
                 	<p style="float:left;"> 
                    <form action="" method="get" style="float:left; 
                    padding:0px; margin:0px; padding-top:5px;">
                            <label style="float:left;">Filter Article :-</label>
                            <select name="category" style="height:30px; 
                            color:#000; font-size:0.9em; float:left;">
                                <option value="">Select Category</option>
                                <?php
                                    $result=$obj->select("select * from tbl_menu where 
                                    status='1' and del='1' order by id");
                                    while($data=mysqli_fetch_assoc($result)){
                                ?>
                                    <?php
                                        if($data['menu']!="" and $data['submenu']=="" and $data['child']==""){
                                    ?>
                                        <option value="<?php echo $data['link']; ?>"> 
                                        <?php echo $data['menu']; ?>
                                        </option>
                                    <?php
                                        }
										else if($data['menu']=="" and $data['submenu']!="" and $data['child']==""){
									?>
                                    	<option value="<?php echo $data['link']; ?>"> 
                                        	<?php echo $data['submenu']; ?>
                                        </option>
                                    <?php
										}
                                        else{
                                    ?>
                                        <option value="<?php echo $data['link']; ?>"> 
                                        <?php echo $data['child']; ?>
                                        </option>
                                    <?php
                                        }
                                    ?>
                                <?php
                                    }
                                ?>
                            </select>
                            <input type="submit" name="filter_category" 
                            value="GO" style="height:30px; cursor:pointer; 
                            color:#FFF; background:#F93; border:none;" />
                        
                    </form>
                    </p>
                   <div class="clear"></div> 
                </div>
            	<div class="nav">
                	<?php
						include('admin_includes/file_chooser.php');
					?>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="footer">
        	Copy Rights &copy; - 2015 All Rights Bright Technology Nepal Pvt. Ltd.
        </div>
    </div>
    <script>
    	CKEDITOR.replace('ckimage', {
  	"filebrowserImageUploadUrl": "ckeditor/plugins/imgupload.php"
	});
	CKEDITOR.config.extraAllowedContent = 'audio[*]{*}';  //to allow audio tag
    </script>
    
</body>
</html>
<?php
	$obj->sql_close();
		} /*session close */
		else{
			header('location:../?msg=session_out');
		}
?>