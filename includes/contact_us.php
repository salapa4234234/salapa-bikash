<script src="js/formValidation.js" type="text/javascript"></script>
<div class="container">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background:#FFF;" data-aos="fade-up"
        data-aos-anchor-placement="top-bottom">
        <style>
        iframe {
            width: 100% !important;
            height: 300px;
        }

        .contact_form span {
            display: block;
        }

        .contact_form span i {
            width: 20%;
            display: block;
            margin: 10px 0px;
            float: left;
            color: #058100;
        }

        .contact_form span input,
        .contact_form span textarea {
            margin: 10px 0px;
            min-width: 60%;
            border-radius: 3px;
            border: 1px solid #CCC;
            padding: 10px;
            font-size: 0.8em;
        }

        .contact_list ul li {
            line-height: 50px;
            font-size: 0.9em;
            border-bottom: 1px dotted #333;
        }
        </style>
        <div class="simple_title">
            <p style="color:#FFF; line-height:40px; 
            background:#058100 ; 
            margin-top:20px; padding-left:10px; font-weight:bold;">Leave Message</p>
        </div>
        <div class="contact_form">
            <div class="col-lg-8 col-md-8 col-sm-12">
                <div class="">
                    <form action="includes/contact_setup.php" method="post" name="contactForms"
                        onsubmit="return contactValidation()">
                        <span>
                            <i>Name</i>
                            <input type="text" name="name" id="name" placeholder=" your name? " required>
                        </span>
                        <span>
                            <i>Email</i>
                            <input type="email" name="email" id="email" placeholder=" your email? " required>
                        </span>
                        <span>
                            <i>Contact</i>
                            <input type="text" name="contact" id="contact" placeholder=" your contact?" />
                        </span>
                        <span>
                            <i>Subject</i>
                            <input type="text" name="contact_for" placeholder=" subject?" required>
                        </span>
                        <span>
                            <i>Message</i>
                            <textarea name="message" style="height:120px;" placeholder=" " required></textarea>
                        </span>
                        <div class="w3_submit">
                            <input type="submit" name="contact_send" value="Send Now"
                                style="border:none; color:#FFF; background:#058100; border-radius:3px; padding:7px 10px;">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="contact_list">
                    <h5 style="color:#058100; font-weight:bold;">Contact Us</h5>
                    <ul style="list-style:none;">
                        <li>
                            <b>Email:</b>
                            <a href="mailto:<?php echo $companyData['email1'];?>" style="color:#333;">
                                <?php echo $companyData['email1']; ?>
                            </a>
                        </li>
                        <li>
                            <b>Phone Number:</b>
                            <?php echo $companyData['phoneNumber']; ?>
                        </li>
                        <li>
                            <b>Mobile:</b>
                            <?php echo $companyData['mobileNumber']; ?>
                        </li>
                        <li>
                            <b>Adderss:</b>
                            <?php echo $companyData['companyAddress']; ?>
                        </li>
                    </ul>

                    <h5 style="font-weight:bold; color:#058100;">Follow Us On</h5>
                    <p>
                    <ul>
                        <li style="list-style:none;">
                            <a href="<?php echo $companyData['facebookPage']; ?>" target="_blank"
                                style="padding-right:20px; text-decoration:none;">
                                <img src="them_img/icon/icon-facebook.png" alt="">
                            </a>
                            <a href="<?php echo $companyData['twitterFollow']; ?>" target="_blank"
                                style="padding-right:20px; text-decoration:none;">
                                <img src="them_img/icon/icon-twitter.png" alt="">
                            </a>
                            <a href="<?php echo $companyData['googlePlus']; ?>" target="_blank"
                                style="padding-right:20px; text-decoration:none;">
                                <img src="them_img/icon/icon-instagram.png" alt="">
                            </a>
                        </li>
                    </ul>
                    </p>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12" style="padding-top:15px;">
        <?php 
            echo $companyData['companyMap'];
        ?>
    </div>
</div>