<div class="container">
    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
        <?php
            if(!isset($_GET['id'])){
        ?>
        <div class="news_box">
            
            <?php
                $results=$obj->select("select * from tbl_content where 
                category='$topic' and del='1' 
                and status='1' order by id desc");
                while($data=mysqli_fetch_assoc($results)){ 
            ?>
                <div class="nav" style="text-align:justify;">
                    <div class="simple_title"  style="padding-top:20px;">
                        <h4>
                            <a href="article/<?php echo base64_encode($topic)."/".base64_encode($data['id']); ?>"
                            style="color:#058100; font-weight:bold;">
                                <?php echo $data['mtitle']; ?>
                            </a>
                        </h4>
                    </div>
                    <div class="salias">
                        <i>
                            <a href="article/<?php echo base64_encode($topic)."/".base64_encode($data['id']); ?>" 
                            style="color:#058100; font-size:0.9em;">
                                <?php echo $data['title']; ?>
                            </a>
                        </i>
                    </div>
                    <p>
                        <?php
                            if($data['image']!=""){
                        ?>
                            <img src="images/content_images/<?php echo $data['image'] ?>" class="img-responsive" 
                            style="float:<?php echo $data['alignment']; ?>; margin:3px 15px 12px 0px; max-width:150px;">
                        <?php
                            }
                        ?>
                        <?php 
                            echo $data['display'];
                        ?>
                        
                        <?php 
                            if($data['files']!=""){
                        ?>
                            <h4>Content Files - </h4>
                            <?php echo $data['files']; ?>
                            <a href="files/contentFile/<?php echo $data['files']; ?>" 
                            target="_blank" style="float:right; background:#900; 
                            padding:2px 5px; color:#FFF;">Download</a>
                        <?php
                            }
                        ?>
                    </p>
                </div>
            <?php
                }
            ?>
            <div class="clear"></div>
        </div>
        <?php
            }
            else{
                $id=$obj->htmlchar($_GET['id']);
                $id=base64_decode($id);
                include('includes/view.php');
            }
        ?>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <?php
            include('includes/rightmenu_viewpoint.php');
        ?>
    </div>
</div>
  