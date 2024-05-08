<?php
	include('includes/db.php');
	if(isset($_GET['topic'])){
		$topic=$_GET['topic'];
		$topic=$obj->htmlchar($topic);
		$topic=base64_decode(urldecode($topic));
	}
	else{
		$topic="home";
	}
	
	if(isset($_GET['id'])){
		$tid=$_GET['id'];
		$tid=$obj->htmlchar($tid);
		$tid=base64_decode(urldecode($tid));
	}
	else{
		$tid="no";
	}
	
	
	$companySql="select * from tbl_companyprofile where id='1'";
	$companyResult=$obj->select($companySql);
	$companyData=mysqli_fetch_assoc($companyResult);
?>
<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
   <base href="http://localhost/salapa/" />
   <!-- Global site tag (gtag.js) - Google Analytics -->
   <script async src="https://www.googletagmanager.com/gtag/js?id=UA-79589751-4"></script>
   <script>
   window.dataLayer = window.dataLayer || [];

   function gtag() {
      dataLayer.push(arguments);
   }
   gtag('js', new Date());

   gtag('config', 'UA-79589751-4');
   </script>
   <title><?php echo strtoupper($topic); ?> | SALAPA BIKAS BANK LIMITED</title>
   <meta charset="UTF-8">
   <meta name="keywords" content="Bank in Nepal">
   <meta name="description" content="SALAPA BIKAS BANK LTD.|Bank in Nepal ">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0,  target-densitydpi=device-dpi">
   <!-- change status bar color on mobile and tablet device -->
   <meta name="theme-color" content="#633371">
   <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
   <base>

   <!-- Fav Icon -->
   <link rel="apple-touch-icon" sizes="57x57" href="assets/frontend/img/fav-icon/apple-icon-57x57.png">
   <link rel="apple-touch-icon" sizes="60x60" href="assets/frontend/img/fav-icon/apple-icon-60x60.png">
   <link rel="apple-touch-icon" sizes="72x72" href="assets/frontend/img/fav-icon/apple-icon-72x72.png">
   <link rel="apple-touch-icon" sizes="76x76" href="assets/frontend/img/fav-icon/apple-icon-76x76.png">
   <link rel="apple-touch-icon" sizes="114x114" href="assets/frontend/img/fav-icon/apple-icon-114x114.png">
   <link rel="apple-touch-icon" sizes="120x120" href="assets/frontend/img/fav-icon/apple-icon-120x120.png">
   <link rel="apple-touch-icon" sizes="144x144" href="assets/frontend/img/fav-icon/apple-icon-144x144.png">
   <link rel="apple-touch-icon" sizes="152x152" href="assets/frontend/img/fav-icon/apple-icon-152x152.png">
   <link rel="apple-touch-icon" sizes="180x180" href="assets/frontend/img/fav-icon/apple-icon-180x180.png">
   <link rel="icon" type="image/png" sizes="192x192" href="assets/frontend/img/fav-icon/android-icon-192x192.png">
   <link rel="icon" type="image/png" sizes="32x32" href="assets/frontend/img/fav-icon/favicon-32x32.png">
   <link rel="icon" type="image/png" sizes="96x96" href="assets/frontend/img/fav-icon/favicon-96x96.png">
   <link rel="icon" type="image/png" sizes="16x16" href="assets/frontend/img/fav-icon/favicon-16x16.png">
   <link rel="manifest" href="assets/frontend/img/fav-icon/manifest.json">
   <meta name="msapplication-TileColor" content="#ffffff">
   <meta name="msapplication-TileImage" content="assets/frontend/img/fav-icon/ms-icon-144x144.png">
   <meta name="theme-color" content="#ffffff">

   <!-- *************** Google Font *************** -->
   <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">

   <!-- *************** Font Awesome *************** -->
   <link href="assets/frontend/fonts/font-awesome-5-0-1/css/fontawesome-all.min.css" rel="stylesheet" type="text/css" />
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
   <!-- *************** Bootstrap *************** -->
   <link href="assets/frontend/js/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
   <link href="assets/frontend/js/vendor/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />

   <!-- *************** Master Slider *************** -->
   <link href="assets/frontend/js/vendor/masterslider/masterslider.css" rel="stylesheet" type="text/css" />
   <link href="assets/frontend/js/vendor/masterslider/ms-layers-style.css" rel="stylesheet" type="text/css" />

   <!-- *************** Master Slider *************** -->
   <link href="assets/frontend/js/vendor/slick-1-9/slick.css" rel="stylesheet" type="text/css" />
   <link href="assets/frontend/js/vendor/slick-1-9/slick-theme.css" rel="stylesheet" type="text/css" />

   <!-- *************** Start Common CSS *************** -->
   <link href="assets/frontend/js/vendor/select2-4-0-3/select2.min.css" rel="stylesheet" type="text/css" />
   <link href="assets/frontend/css/common/main.css" rel="stylesheet" type="text/css" />
   <!-- *************** End Common CSS *************** -->
   <script src='../www.google.com/recaptcha/api.js'></script>
   <link href="assets/frontend/css/pages/home.css" rel="stylesheet" type="text/css" />
   <script>
   function site_url(url) {
      return "https://www.civilbank.com.np/" + url;
   }
   </script>

   <!-- *************** End Common CSS *************** -->
</head>

<body>
   <!--
    <div class="loader">
        <div class="loader-main-wrap">
            <div class="spin-border"></div>
            <div class="loader-text"> SALAPA BIKAS BANK LTD. </div>
            <span class="move-two-side"></span> 
            <img src="assets/frontend/img/logo-civil-loader.png" alt=""> 
        </div>
    </div>-->
   <!--<div class="overlay" style="display: none;"></div>-->
   <!--
    <nav class="fixed-sidemenu">
        <input type="checkbox" href="#" class="side-opner-mobile" name="side-opner-mobile" id="side-opner-mobile" />
        <label class="side-opner-toggler" for="side-opner-mobile"> 
        	<img src="assets/frontend/img/logo-civil-loader.png" alt="" style="width: 20px;" /> 
        </label>
        <a href="download.html" class="items-side">
            <figure> 
            	<img src="assets/backend/uploads/icons/icon-download.svg" alt="" style="width: 21px;"> 
            </figure>
        	<span>Download</span> 
        </a> 
        <a href="emi-calculator.html" class="items-side">
            <figure> 
            	<img src="assets/backend/uploads/banner/icons/icon-calculator.svg" alt="" style="width: 21px;"> 
            </figure>
        	<span>EMI Calculator</span> 
        </a> 
        <a href="notice.html" class="items-side">
            <figure> 
            	<img src="assets/backend/uploads/icons/icon-notices.svg" alt="" style="width: 21px;"> 
            </figure>
            <span>Notice</span> 
        </a> 
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
        <defs>
            <filter id="shadowed-goo">
                <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10" />
                <feColorMatrix in="blur" mode="matrix" 
                values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
                <feGaussianBlur in="goo" stdDeviation="3" result="shadow" />
                <feColorMatrix in="shadow" mode="matrix" 
                values="0 0 0 0 0  0 0 0 0 0  0 0 0 0 0  0 0 0 1 -0.2" result="shadow" />
                <feOffset in="shadow" dx="1" dy="1" result="shadow" />
                <feComposite in2="shadow" in="goo" result="goo" />
                <feComposite in2="goo" in="SourceGraphic" result="mix" />
                </filter>
                <filter id="goo">
                <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10" />
                <feColorMatrix in="blur" mode="matrix" 
                values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
                <feComposite in2="goo" in="SourceGraphic" result="mix" />
            </filter>
        </defs>
        </svg> 
    </nav>-->
   <header>
      <?php
	
  	include('includes/topmenu.php');
  	include('includes/menu.php');
  ?>
   </header>
   <main>
      <?php
   		include('includes/locationtracker.php');
   		include('includes/page_chooser.php');
   ?>
   </main>
   <?php
		include('includes/footer.php');
      include('includes/messenger.php');

	if($topic=="home")
	{
?>
   <div class="popup" role="alert">
      <div class="pop-overlay"></div>
      <div class="pop-container">
         <a href="#" class="popup-close img-replace" id="popup_close">Close</a>
         <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
               <div class="item active">
                  <img src="assets/frontend/img/topup_notice/shubhakamana.jpg">
               </div>
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
               <span class="glyphicon glyphicon-chevron-left"></span>
               <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
               <span class="glyphicon glyphicon-chevron-right"></span>
               <span class="sr-only">Next</span>
            </a>
         </div>
      </div>
      <!-- popup-container -->
   </div>
   <?php
	}
?>
   <div class="forex-pop" style="display: none;">
      <div class="table-responsive">
         <table class="table forex-table">
            <thead>
               <tr>
                  <th>Branches</th>
                  <th>Contact Number</th>
                  <th>Email Address</th>
                  <th>Contact Person</th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td>Head Office</td>
                  <td>036420457</td>
                  <td>info@sbbank.com.np</td>
                  <td>Mrs. Sita Rai</td>
               </tr>
               <tr>
                  <td>Diktel Branch</td>
                  <td>036420638</td>
                  <td>diktel@sbbank.com.np</td>
                  <td>Mr. Dipkar Rai</td>
               </tr>
               <tr>
                  <td>Halesi Branch</td>
                  <td>03641039</td>
                  <td>halesi@sbbank.com.np</td>
                  <td>Mr. Bhaskar Shrestha</td>
               </tr>
               <tr>
                  <td>Aiselukharka Branch</td>
                  <td>036411102</td>
                  <td>aiselukharka@sbbank.com.np</td>
                  <td>Mr. Ananda Rai</td>
               </tr>
               <tr>
                  <td>Baksila Branch</td>
                  <td>9852877111</td>
                  <td>baksila@sbbank.com.np</td>
                  <td>Mr. Mahesh Raj Bhandari</td>
               </tr>
               <tr>
                  <td>Simpani Branch</td>
                  <td>9840126427</td>
                  <td>simpani@sbbank.com.np</td>
                  <td>Mr. Saroj Basnet</td>
               </tr>
               <tr>
                  <td>Chisapani Branch</td>
                  <td>036421021</td>
                  <td>chisapani@sbbank.com.np</td>
                  <td>Mr. Sajan Rai</td>
               </tr>
            </tbody>
         </table>
      </div>
      <button class="close-forex">x</button>
   </div>

   <div class="overlay-light-black"></div>
   <?php
		if($topic!="gallery"){
	?>
   <script src="assets/frontend/js/common/jquery.min.js" type="text/javascript"></script>
   <?php
		}
	?>
   <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

   <script src="assets/frontend/js/vendor/masterslider/jquery.easing.min.js" type="text/javascript"></script>
   <!-- *************** Bootstrap *************** -->
   <script src="assets/frontend/js/vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
   <!-- *************** Master Slider *************** -->
   <script src="assets/frontend/js/vendor/masterslider/masterslider.min.js" type="text/javascript"></script>
   <!-- *************** Slick Slider *************** -->
   <script src="assets/frontend/js/vendor/slick-1-9/slick.min.js" type="text/javascript"></script>
   <!-- *************** Select 2 *************** -->
   <script src="assets/frontend/js/vendor/select2-4-0-3/select2.full.min.js" type="text/javascript"></script>
   <!-- *************** Stellar *************** -->
   <script src="assets/frontend/js/vendor/stellar/jquery.stellar.min.js" type="text/javascript"></script>
   <script src="assets/frontend/js/common/main.js" type="text/javascript"></script>
   <!--****For Cookie in ajax***-->
   <script src="assets/frontend/js/common/cookie.js" type="text/javascript"></script>
   <script src="assets/frontend/js/pages/home.js" type="text/javascript"></script>

   <!-- Our Team -->
   <script src="test/jquery.counterup.js"></script>
   <script type="text/javascript" src="test/bootstrap-progressbar.js"></script>
   <script src="test/slick.js"></script>
   <script type="text/javascript" src="test/custom.js"></script>
   <!-- our team -->
   <script src="assets/frontend/js/common/script.js"></script>
</body>

</html>