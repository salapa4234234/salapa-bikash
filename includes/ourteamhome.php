<section id="testimonial" style="overflow:hidden;">
    <div class="container">
        <div class="row" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-area" style="text-align:center;">
                            <h2 class="title">OUR TEAM</h2>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <!-- Start testimonial slider -->
                        <div class="testimonial-slider">
                            <?php
                    $result1=$obj->select("select * from tbl_member where 
                    feature='1' and del='1' and status='1' order by displayposition");
                    while($data=mysqli_fetch_assoc($result1)){
                    ?>
                            <div class="single-slider">
                                <div class="testimonial-img">
                                    <?php
                            if($data['image']!=""){
                        ?>
                                    <img src="images/memberImages/<?php echo $data['image'];?>" alt="testimonial image">
                                    <?php
                            }
                            else{
                        ?>
                                    <img src="images/themImages/dmem.jpg" style="width:70px;" />
                                    <?php
                            }
                        ?>
                                </div>
                                <div class="testimonial-content">
                                    <p>
                                        <?php echo $data['memberName']; ?>
                                    </p>
                                    <h6 style="font-weight:bold; text-transform:uppercase;">
                                        <?php echo $data['position']; ?></h6>
                                </div>
                            </div>
                            <?php
                    }
                    ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6"></div>
        </div>
    </div>
</section>