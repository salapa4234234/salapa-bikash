<div class="header-top">
    <div class="container flex-container">
        <nav>
            <a href="main/<?php echo base64_encode('branches'); ?>">
                <img src="them_img/icon/topmenu/branches.png" alt="" style="width: 21px;">
                <span>Branches</span>
            </a>
            <a href="main/<?php echo base64_encode('faq'); ?>">
                <img src="them_img/icon/topmenu/faq.png" alt="" style="width: 21px;">
                <span>FAQ</span>
            </a>
            <a href="main/<?php echo base64_encode('contactus'); ?>">
                <img src="them_img/icon/topmenu/contactus.png" alt="" style="width: 21px;">
                <span>Contact Us</span>
            </a>
        </nav>
        <!-- <div>Your easy financial partner!</div> -->
        <div class="option-right">
            <button class="btn-forex" type="button">
                <img src="them_img/icon/topmenu/quickcontact.png" alt="">
                <span>Quick Contact</span>
            </button>
            <div class="quicklink-wrap">
                <button class="btn-quicklink" type="button">
                    <img src="them_img/icon/topmenu/login.png" alt="">
                    <span>Login</span>
                </button>
                <nav class="quick-link-drop">
                    <a href="https://outlook.office.com/" target="_blank">
                        Email Login
                    </a>
                    <a href="cpanel/" target="_blank">
                        Cpanel Login
                    </a>
                    <a href="admin/" target="_blank">Admin Login</a>
                </nav>
            </div>
            <form class="search-wrap-box" method="get" action="index.php?topic=search">
                <input id="search-field" name="search" class="form-control" type="text"
                    placeholder="Enter text here..." />
                <button type="button" class="btn-toggle-search"> </button>
                <button type="submit" class="btn-search" style="display: none"><i class="fas fa-search"></i></button>
            </form>
        </div>
    </div>
</div>