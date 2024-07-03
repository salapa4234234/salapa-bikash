<section class="master-slider " id="hero-banner">
   <?php
		$result=$obj->select("SELECT * FROM tbl_gallery WHERE parent='6' 
        AND status='1' and feature='1' and del='1' ORDER BY id desc");
        while($data=mysqli_fetch_assoc($result)){
	?>
   <div class="ms-slide" style="background: url(), rgba(99, 51, 113, .9)">
      <img src="" data-src="images/gallery_images/<?php echo $data['image']; ?>" alt="" />
      <h2 class="ms-layer banner-title" data-effect="t(true,150,n,900,n,n,n,n,n,n,n,n,n,n,n)" data-duration="3400"
         data-delay="0" data-offset-y="-100" data-ease="easeOutQuint" data-origin="ml" data-position="normal">
         <?php echo $data['title']; ?> </h2>
      <a href="<?php echo "main/".base64_encode("introduction"); ?>" class="ms-layer  btn-banner-link" data-effect="t(true,n,n,-450,n,n,n,n,n,n,n,n,n,n,n)"
         data-duration="3000" data-delay="1000" data-ease="easeOutQuint" data-type="button" data-origin="ml"
         data-position="normal" style="color:white;"> <?php echo $data['alias']; ?> </a>
   </div>
   <?php
		}
	?>
   <div class="flex-container container">

      <div class="slider-section">
         <div class="slider-main">
            <a href="<?php echo "main/".base64_encode("interestrate"); ?>"
            style="color:#000">
               <div class="card">
                  <div class="card-icon">
                  <img src="includes/images/interest.png" />
                  </div>
                  <div class="card-title">Interest Rate</div>
               </div>
            </a>
            <a href="files/contentFile/calender.pdf" target="_blank"
            style="color:#000">
               <div class="card">
                  <div class="card-icon">
                  <img src="includes/images/calender.jpg" />
                  </div>
                  <div class="card-title">
                     Calender
                  </div>
               </div>
            </a>
            <a href="https://salapabikasbank-utility.netlify.app/" target="_blank"
            style="color:#000">
               <div class="card">
                  <div class="card-icon">
                  <img src="includes/images/business.png" />
                  </div>
                  <div class="card-title">EMI Calculator</div>
               </div>
            </a>
         </div>
      </div>
   </div>

</section>