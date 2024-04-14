<style>
	.depositbox h1, .depositbox h2, .depositbox h3, .depositbox h4, .depositbox h5, .depositbox h6{
		font-size:1.5em;
		padding-top:0px}
</style>
<div class="container">
    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
        <div class="cwarp">
			<?php
                $qry=$obj->select("select * from tbl_content where id='$id'");
                $data=mysqli_fetch_assoc($qry);
            ?>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div style="color:#058100; text-align:left; font-size:2em; padding:30px 0px 10px 0px;">
                    <span>
                        <?php echo $data['mtitle']; ?>
                    </span>
                </div>
            </div>
            <div class="wrapper col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                	<div class="depositbox">
                    	<img src="images/content_images/<?php echo $data['image']; ?>">
                        <p style="padding-top:20px;>"
							<?php echo $data['display']; ?> 
                        </p>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                	<div class="depositbox">
                        <?php echo $data['content']; ?>
                    </div>
                </div>
            </div>
    	</div>
        <div class="clearfix"></div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <?php
            include('includes/rightmenu_viewpoint.php');
        ?>
    </div>
</div>
  