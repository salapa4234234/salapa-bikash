<section class="padding-section civil-updates-section" style="overflow: hidden;">
    <div class="container">
        <h2 class="text-semi-bold text-purple" style="text-align:center;">
            Salapa Bikas Bank Activities
        </h2>
        <div class="new-event-updates" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
            <?php
				$result=$obj->select("select * from tbl_content where category='activities'
				and status='1' and display_order='1' and del='1' order by id desc");
				while($data=mysqli_fetch_assoc($result)){
					$date=$data['dates'];
					$year = date('Y', strtotime($date));
					$month = date('M', strtotime($date));
					$day = date('d', strtotime($date));
			?>
            <article class="news">
                <span class="event-date"> <?php echo $day; ?> <small><?php echo $month.", ".$year; ?></small> </span>
                <h5 class="text-semi-bold text-purple"><?php echo $data['mtitle']; ?></h5>
                <p>
                    <?php echo $data['display']; ?>
                </p>
                <a href="article/<?php 
				echo base64_encode($data['category'])."/".base64_encode($data['id']); ?>"
                    class="text-purple text-semi-bold pull-right">View all...</a>
            </article>
            <?php
				}
			?>
        </div>
        <div class="social-stories hidden">
            <h2 class="text-semi-bold text-purple"> <span class="text-medium text-black"></span> </h2>
            <div class="social-wrap">
                <a href="#">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a href="#">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>
    </div>
</section>