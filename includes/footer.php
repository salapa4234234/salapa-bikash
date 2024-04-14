<section class="padding-section">
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-4" style="text-align:center;"> 
            <a href="" class="footer-logo"> 
                <img src="them_img/logo-main-footer.png" alt="Salapa Bikas Bank Limited." 
                style="text-align:center; background:#FFF; padding:15px; border-radius:10%;"> 
             </a>
              <p class="text-white"> <i style="font-weight:600;"> "YOUR EASY FINANCIAL PARTNER." </i> </p>
        </div>
        <div class="col-xs-12 col-md-7 col-md-offset-1">
          <div class="newletter-social-wrap">
            <div class="footer-social">
              <h4>Social Media</h4>
              <a href="<?php echo $companyData['facebookPage']; ?>"> 
              	<img src="them_img/icon/icon-facebook.png" alt=""> 
              </a> 
              <a href="<?php echo $companyData['twitterFollow']; ?>"> 
              	<img src="them_img/icon/icon-twitter.png" alt=""> 
              </a> 
              <a href="#"> 
              	<img src="them_img/icon/icon-linkedin.png" alt=""> 
              </a> 
              <a href="#"> 
              	<img src="them_img/icon/icon-instagram.png" alt=""> 
              </a> 
              </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-md-12">
              <address class="text-white">
                  <h4 class="text-green text-semi-bold">Head Office</h4>
                  <?php echo $companyData['companyName']; ?><br>
                  <?php echo $companyData['companyAddress']; ?><br>
                  Email: <?php echo $companyData['email1']; ?> <br>
                  Phone Number: <?php echo $companyData['phoneNumber'];?>
              </address>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <p><?php echo $companyData['copyRight'];?></p>
            <span>Powered By: <a href="https://btechnepal.com/" target="_blank">BTech Nepal</a> </span> 
        </div>
    </div>
  </footer>
</section>
