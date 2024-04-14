
<style>
	.cwarp{
		min-height:500px;}	
	.depositlink{
		color:#058100}
	.depositlink:hover{
		color: #900;}
	.depositbox{
		border:1px solid #058100;
		padding:10px;
		margin-top:20px;}
	.depositbox:hover{
		border:1px solid #900;}
	.depositbox img{
		width:100%;}
	.depositbox h1, .depositbox h2, .depositbox h3, .depositbox h4, .depositbox h5, .depositbox h6{
		font-size:1.5em;
		padding-top:10px;}
	.depositbox ul{
		padding-left:20px;}
	.depositbox li{
		list-style:square;
		line-height:25px;}
	.fa{
		color:#39C;
		height:100%;
		width:100%;}
	.fa:hover{
		color:#F00;}
</style>
<?php
            if(!isset($_GET['id'])){
        ?>
<div class="container cwarp">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div style="color:#058100; text-align:center; font-size:2em; padding:20px 0px;">
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
    <div class="wrapper col-lg-12 col-md-12 col-sm-12 col-xs-12">
    	<?php
			$qry=$obj->select("select * from tbl_content where category='$topic'");
			while($data=mysqli_fetch_assoc($qry)){
		?>
        <a href="article/<?php echo base64_encode($topic)."/".base64_encode($data['id']); ?>" class="depositlink">
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        	<div class="depositbox">
            	<img src="images/content_images/<?php echo $data['image']; ?>">
				<h4><?php echo $data['mtitle']; ?></h4>
                <?php echo $data['display']; ?>
        	</div>
        </div>
        </a>
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