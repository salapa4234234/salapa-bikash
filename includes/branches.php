<style>
.cwarp {
   min-height: 500px;
   padding: 2rem 0px;
}

.depositlink {
   color: #058100;

}

/* .depositlink:hover {
   color: #900;
} */

.depositbox {
   border: 1px solid #058100;
   padding: 23px;
   margin-top: 20px;
   border-left: 4px solid green;
   border-radius: 6px;
   min-height: 220px;
   max-width: 300px;

}

.depositbox:hover {
   /* border: 1px solid #900; */
}

.depositbox img {
   width: 100%;
}

.depositbox h1,
.depositbox h2,
.depositbox h3,
.depositbox h4,
.depositbox h5,
.depositbox h6 {
   font-size: 1.5em;
   padding-top: 10px;
   font-weight: 600;
}

.depositbox ul {
   padding-left: 20px;
}

.depositbox li {
   list-style: square;
   line-height: 25px;
}

.fa {
   color: #39C;
   height: 100%;
   width: 100%;
}

.fa:hover {
   color: #F00;
}

.flex {
   display: flex;
   flex-wrap: wrap;
   gap: 0.8rem;
   justify-content: center;
   align-items: center;
}

.b-card {
   height: 20px;
   display: flex;
   align-items: center;
   justify-content: flex-start;
   gap: 1.2rem;

}

.b-card span {
   display: block;
}

.b-icon {
   height: 100%;
   display: flex !important;
   align-items: center !important;
}

.b-icon img {
   height: 100%;
   width: 100%;
   object-fit: contain;

}

.b-title {
   word-break: break-word;
}
</style>
<?php
            if(!isset($_GET['id'])){
        ?>
<div class="container cwarp" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
   <div class="">
      <div style="color:#058100; text-align:center; font-size:2.4em; padding:20px 0px;font-weight:600;">
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
   <div class="wrapper flex">
      <?php
			$qry=$obj->select("select * from tbl_content where category='$topic'");
			while($data=mysqli_fetch_assoc($qry)){
		?>
      <div class="depositlink">
         <div class="">
            <div class="depositbox">
               <h4>
                  <span> <?php echo $data['mtitle']; ?></span>
               </h4>
               <p class="b-card">
                  <span class="b-icon"><img src="includes/images/poeple.png" /> </span>
                  <span class="b-title">Dipkar Rai</span>
               </p>
               <p class="b-card">
                  <span class="b-icon"><img src="includes/images/location.png" /> </span>
                  <span class="b-title">Bakshila</span>
               </p>
               <p class="b-card"> <span class="b-icon"><img src="includes/images/mail.png" /> </span>
                  <span class="b-title">
                     nabaraj2055@gmail.com
                  </span>
               </p>
               <p class="b-card"> <span class="b-icon"><img src="includes/images/phone-call.png" /> </span>
                  <span class="b-title">
                     983555878
                  </span>
               </p>
            </div>
         </div>
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