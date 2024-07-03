<?php
	include('php/db.php');
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


   <style>
      html {
  scroll-behavior: smooth;
}
   body{
      position: relative;
      height:100vh
   }
   .up-arrow-btn{
      position: fixed;
      bottom:7rem;
      right:3rem;
      z-index: 500;
      background: #054D05;
      padding: 0.5rem;
      height: 4.5rem;
      width: 4.5rem;
      border:none;
      border-radius: 50%;
      outline:none;
      display:flex;
      align-items:center;
      justify-content:center;
      box-shadow: rgba(17, 17, 26, 0.1) 0px 4px 16px, rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 56px;
   }
   .up-arrow-btn svg{
    fill:white;
    font-size:2.5rem;
    font-weight: 700;
   }
   </style>
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
      include('includes/popup.php');
   ?>
   <?php
      include('includes/quickContact.php')
   ?>

   <div class="overlay-light-black"></div>
   <?php
		if($topic!="gallery"){
	?>
         <button onclick="topFunction()"class="up-arrow-btn"><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M11 2.206l-6.235 7.528-.765-.645 7.521-9 7.479 9-.764.646-6.236-7.53v21.884h-1v-21.883z"/></svg></button>

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
   <script>

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
   </script>
</body>

</html>