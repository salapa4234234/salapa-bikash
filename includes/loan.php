<style>
.loan-section {
    margin-top: 1.7rem;
    border-radius: 10px;
    border: 1.9px solid green;
    overflow: hidden;

}
</style>

<div class="container">
    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 loan-section" style=" background:#FFF;" data-aos="fade-up"
        data-aos-anchor-placement="top-bottom">
        <?php
	$result=$obj->select("select * from tbl_content where category='$topic' 
	order by id desc");
	while($data=mysqli_fetch_assoc($result)){
		
		$id=$data['id'];
		$category=$data['category'];
		$title=$data['mtitle'];
		$content=$data['content'];
		$image=$data['image'];
		$align=$data['alignment'];
		$admin=$data['admin'];
?>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style=" background:#FFF;">
            <div class="simple_title">
                <h4 style="padding-top:20px;">
                    <a href="article/<?php echo base64_encode($category)."/".base64_encode($id); ?>"
                        style="color:#058100; font-size:1em; font-weight:bold;">
                        <?php echo $title; ?>
                    </a>
                </h4>
            </div>
            <b class="home_title">
                <a href="article/<?php echo $category."/".$id; ?>"
                    style="color:#058100; font-style:italic; font-size:0.9em">
                    <?php echo $data['title']; ?>
                </a>
            </b>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style=" background:#FFF;">
            <?php
                if( $image!=""){
            ?>
            <img src="images/content_images/<?php echo $image ?>" class="img-responsive" style="float:<?php echo $align; ?>; 
                margin:3px 10px 3px 3px;" />
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style=" background:#FFF;">
            <p>
                <?php
                }
                echo $content;
            ?>
            </p>
        </div>
        <?php
	}
?>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <?php
            include('includes/rightmenu_viewpoint.php');
	?>
    </div>
</div>