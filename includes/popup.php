<?php
	if($topic=="home")
	{
?>
    <div class="popup" role="alert">
        <div class="pop-overlay"></div>
        <div class="pop-container"> 
            <a href="#" class="popup-close img-replace" id="popup_close">Close</a>
            <div id="myCarousel" class="carousel slide" data-ride="carousel"> 
                <!-- Indicators -->
                <ol class="carousel-indicators">
                <?php
            		$resultt=$obj->select("SELECT * FROM tbl_gallery WHERE parent='14' AND status='1' and feature='1' and del='1' ORDER BY id desc");
                    $count=0;
                    while($datat=mysqli_fetch_assoc($resultt)){
            	?>
                    <li data-target="#myCarousel" data-slide-to="<?php echo $count; ?>" class="active"></li>
                <?php
                    $count++;
                    }
                ?>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <?php
                		$resultt=$obj->select("SELECT * FROM tbl_gallery WHERE parent='14' AND status='1' and feature='1' and del='1' ORDER BY id desc");
                        $count=0;
                        while($datat=mysqli_fetch_assoc($resultt)){
                	?>
                        <div class="item <?php if($count==0) {echo "active"; }?> "> 
                            <img src="images/gallery_images/<?php echo $datat['image']; ?>"> 
                        </div>
                    <?php
                        $count++;
                        }
                    ?>
                </div>
                <!-- Left and right controls --> 
                <a class="left carousel-control" href="#myCarousel" data-slide="prev"> 
                    <span class="glyphicon glyphicon-chevron-left"></span> 
                    <span class="sr-only">Previous</span> 
                </a> 
                <a class="right carousel-control" href="#myCarousel" data-slide="next"> 
                    <span class="glyphicon glyphicon-chevron-right"></span> 
                    <span class="sr-only">Next</span> 
                </a> 
            </div>
        </div>
        <!-- popup-container --> 
    </div>
<?php
	}
?>