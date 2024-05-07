<style>
.fixed-deposit-wrapper {
   display: flex;
   justify-content: center;
   align-items: center;
   gap: 2.5rem;
   flex-wrap: wrap;
}

.fd-cards {
   max-width: 30rem;
   width: 100%;
   cursor: pointer;
   position: relative;
   display: block;
   transition: all 0.4s ease-in-out;
   overflow: hidden;
   box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
   border-radius: 13px;
   min-height: 350px;
   height: 100%;

}

.fd-cards:hover .fd-image img {
   transform: scale(1.3);
}

.fd-image {
   position: relative;
   overflow: hidden;
}

.fd-image img {
   width: 100%;
   heigh: 100%;
   object-fit: contain;
   transition: all 0.5s ease-in-out;

}

.fd-content {
   padding: 2rem 3rem;
}

.fd-title {
   margin: 0rem 0px 2rem 0px;

}

.fd-section {
   padding: 4rem 0px;
}

.fd-content h4 {
   font-size: 2rem;
   font-weight: 600;
   color: #262626;
}
</style>
<?php
            if(!isset($_GET['id'])){
        ?>
<div class="container fd-section">
   <div class="fd-title">
      <div style="color:#058100; text-align:center; font-weight:600; font-size:2.2em; padding:20px 0px;">
         <span>
            <?php
                    $qry=$obj->select("select * from tbl_menu where link='$topic'");
                    $data=mysqli_fetch_assoc($qry);
                    
                    if($data['menu']!=""){
                        echo $data['menu'];
                    }else if($data['submenu']!=""){
                        echo $data['submenu'];
                    }else{
                        echo $data['child'];
                    }
                ?>
         </span>
      </div>
   </div>
   <div class="fixed-deposit-wrapper" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
      <?php
			$qry=$obj->select("select * from tbl_content where category='$topic'");
			while($data=mysqli_fetch_assoc($qry)){
		?>
      <div class="fd-cards">
         <a href="article/<?php echo base64_encode($topic)."/".base64_encode($data['id']); ?>" class="fd-depositlink">
            <div class="fd-card">
               <div class="fd-image">
                  <img src="images/content_images/<?php echo $data['image']; ?>">
               </div>
               <div class="fd-content">
                  <h4><?php echo $data['mtitle']; ?></h4>
                  <h3><?php echo $data['title']; ?></h3>
                  <p><?php echo $data['display']; ?></p>
               </div>
            </div>
         </a>
      </div>
      <?php
			}
		?>
   </div>
</div>
<?php
	}
	else{
		$id=$obj->htmlchar($_GET['id']);
		$id=base64_decode($id);
		include('includes/depositandsavingone.php');
	}
?>