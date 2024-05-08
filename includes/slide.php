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
      <a href="#" class="ms-layer  btn-banner-link" data-effect="t(true,n,n,-450,n,n,n,n,n,n,n,n,n,n,n)"
         data-duration="3000" data-delay="1000" data-ease="easeOutQuint" data-type="button" data-origin="ml"
         data-position="normal" style="color:white;"> <?php echo $data['alias']; ?> </a>
   </div>
   <?php
		}
	?>
   <div class="flex-container container">

      <div class="slider-section">
         <div class="slider-main">
            <div class="card">
               <div class="card-icon">
                  <img src="https://siteadmin.nabilbank.com/assets/backend/uploads/Banner%20Menu/interest.png" alt="">
               </div>
               <div class="card-title">Interest Rate</div>
            </div>
            <div class="card">
               <div class="card-icon">
                  <img src="https://siteadmin.nabilbank.com/assets/backend/uploads/Banner%20Menu/interest.png" alt="">
               </div>
               <div class="card-title">
                  Calender
               </div>
            </div>
            <div class="card">
               <div class="card-icon">
                  <img src="https://siteadmin.nabilbank.com/assets/backend/uploads/Banner%20Menu/interest.png" alt="">
               </div>
               <div class="card-title">EMI Calculator</div>
            </div>
         </div>
      </div>
   </div>

</section>