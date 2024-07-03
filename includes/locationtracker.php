	<style>
.breadcrumb {
    text-align: left;
    line-height: 170px;
    background: none;
}

.breadcrumb .active {
    color: #FFF;
}

.breadcrumb a {
    color: #f1f113;
}

.single-page-header-right {
    font-size: 1.3em;
}
	</style>
	<!-- direction ======================================= -->
	<div
	    style="width:100%; line-height:80px; line-height:300px; background:url(images/themImages/locationtrackers.jpg) no-repeat;">
	    <?php
		if(($topic!="home") || ($topic=="home" && isset($_GET['id']))){

			
	?>
	    <div class="container">
	        <div class="col-lg-12 col-md-12 col-sm-12">
	            <div class="row">
	                <?php 
            $result=$obj->select("select * from tbl_menu where link='$topic'");
            $data=mysqli_fetch_assoc($result);
			
            if($data['category']=="menu"){
        ?>
	                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                    <div class="single-page-header-right">
	                        <ol class="breadcrumb">
	                            <li><a href="">Home</a></li>
	                            <li class="active"><?php echo $data['menu']; ?></li>
	                        </ol>
	                    </div>
	                </div>
	                <?php
            }
			else if($topic=="gallery"){
		?>

	                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                    <div class="single-page-header-right">
	                        <ol class="breadcrumb">
	                            <li><a href="">Home</a></li>
	                            <li class="active">Gallery</li>
	                        </ol>
	                    </div>
	                </div>
	                <?php
			}
			else if($topic=="videogallery"){
		?>
	                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                    <div class="single-page-header-right">
	                        <ol class="breadcrumb">
	                            <li><a href="">Home</a></li>
	                            <li class="active">Video Gallery</li>
	                        </ol>
	                    </div>
	                </div>
	                <?php
			}
			else if($topic=="audiogallery"){
		?>
	                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                    <div class="single-page-header-right">
	                        <ol class="breadcrumb">
	                            <li><a href="">Home</a></li>
	                            <li class="active">Audio Gallery</li>
	                        </ol>
	                    </div>
	                </div>
	                <?php
			}
			else if($topic=="adddownload"){
		?>
	                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                    <div class="single-page-header-right">
	                        <ol class="breadcrumb" style="background:#058100">
	                            <li>
	                                <a href="main/<?php echo base64_encode("download"); ?>">Download</a>
	                            </li>
	                            <li class="active">Download</li>
	                        </ol>
	                    </div>
	                </div>
	                <?php
			}
			else if($topic=="newpublication"){
		?>
	                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                    <div class="single-page-header-right">
	                        <ol class="breadcrumb">
	                            <li>
	                                <a href="main/<?php echo base64_encode("download"); ?>">Download</a>
	                            </li>
	                            <li class="active">Publication</li>
	                        </ol>
	                    </div>
	                </div>
	                <?php
			}
			else if($topic=="newnewsandevent"){
		?>
	                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                    <div class="single-page-header-right">
	                        <ol class="breadcrumb">
	                            <li>
	                                <a href="main/<?php echo base64_encode("download"); ?>">Download</a>
	                            </li>
	                            <li class="active">News & Events</li>
	                        </ol>
	                    </div>
	                </div>
	                <?php
			}
			else if($topic=="faq"){
		?>
	                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                    <div class="single-page-header-right">
	                        <ol class="breadcrumb">
	                            <li>
	                                <a href="main/<?php echo base64_encode("home"); ?>">Home</a>
	                            </li>
	                            <li class="active">FAQ</li>
	                        </ol>
	                    </div>
	                </div>
	                <?php
			}
			else if($topic=="mobilebanking"){
		?>
	                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                    <div class="single-page-header-right">
	                        <ol class="breadcrumb">
	                            <li>
	                                <a href="main/<?php echo base64_encode("home"); ?>">Home</a>
	                            </li>
	                            <li class="active">Mobile Banking</li>
	                        </ol>
	                    </div>
	                </div>
	                <?php
			}
			else if($topic=="branches"){
		?>
	                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                    <div class="single-page-header-right">
	                        <ol class="breadcrumb">
	                            <li>
	                                <a href="main/<?php echo base64_encode("home"); ?>">Home</a>
	                            </li>
	                            <li class="active">Branches</li>
	                        </ol>
	                    </div>
	                </div>
	                <?php
			}
			else if($topic=="contactus"){
		?>
	                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                    <div class="single-page-header-right">
	                        <ol class="breadcrumb">
	                            <li>
	                                <a href="main/<?php echo base64_encode("home"); ?>">Home</a>
	                            </li>
	                            <li class="active">Contact Us</li>
	                        </ol>
	                    </div>
	                </div>
	                <?php
			}
			else if($topic=="newinformation"){
		?>

	                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                    <div class="single-page-header-right">
	                        <ol class="breadcrumb">
	                            <li>
	                                <a href="main/<?php echo base64_encode("download"); ?>">Download</a>
	                            </li>
	                            <li class="active">Notices</li>
	                        </ol>
	                    </div>
	                </div>
	                <?php
			}
            else{
				$parentid=$data['parent'];
				$result1=$obj->select("select * from tbl_menu where id='$parentid'");
				$data1=mysqli_fetch_assoc($result1);
				$pid=$data1['parent'];
				if($data['child']!="" and $parentid!=""){
					$res=$obj->select("select * from tbl_menu where id='$pid'");
					$dat=mysqli_fetch_assoc($res);
		?>
	                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                    <div class="single-page-header-right">
	                        <ol class="breadcrumb  ">
	                            <span class="desktop">
	                                <li><a href="main/<?php echo base64_encode($data1['link']); ?>">
	                                        <?php echo $dat['menu']; ?>
	                                    </a></li>
	                                <li style="color:#CF3;"><?php echo $data1['submenu']; ?></li>
	                                <li class="active"><?php echo $data['child']; ?></li>
	                            </span>
	                            <span class="mobile">
	                                <li style="color:white;">.../ </li>
	                                <li class="active"><?php echo $data['child']; ?></li>
	                            </span>
	                        </ol>

	                    </div>
	                </div>
	                <?php
				}
				else{
				?>
	                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                    <div class="single-page-header-right">
	                        <ol class="breadcrumb  ">
	                            <span class="desktop">
	                                <li><a href="main/<?php echo base64_encode($data1['link']); ?>">
	                                        <?php echo $data1['menu']; ?>
	                                    </a></li>
	                                <li class="active"><?php echo $data['submenu']; ?></li>
	                            </span>
	                            <span class="mobile">
	                                <li style="color:white;">.../ </li>
	                                <li class="active"><?php echo $data['submenu']; ?></li>
	                            </span>
	                        </ol>
	                        <!-- <ol class="breadcrumb">
                <li><a href="main/<?php echo base64_encode($data1['link']); ?>">
                        <?php echo $data1['menu']; ?>
                    </a></li>
                <li class="active"><?php echo $data['submenu']; ?></li>
              </ol> -->
	                    </div>
	                </div>
	                <?php
				}
            }
        ?>
	            </div>
	        </div>
	    </div>
	    <?php
		}
	?>
	</div>