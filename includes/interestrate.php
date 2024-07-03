<style>
	.download tr th, .download tr td{
		padding:5px 0px;
		border:1px solid #CCC;
		text-align:center;
		font-size:1em;}
	.download tr th{
		background:#058100;
		color:#FFF;}
	.downloadtitle{
		text-align:left !important;
		padding-left:5px !important;}
	.download a{
		color:#F00;}
	.fa{
		color:#0f8957;
		height:100%;
		width:100%;}
	.fa:hover{
		color:#F00;}
		
</style>
<section id="blog-archive" >
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="blog-archive-area">
            <div class="row">
<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" style="margin-top:15px;">
    <table width="100%" class="download">
        <tr>
        	<th colspan="4" style="text-align:left; padding-left:10px; background:#058100; line-height: 2.2em; font-size:1.5em;">
			Interest Rate
            </th>
        </tr>
        <tr>
        	<th>S.N</th>
            <th class="downloadtitle">Title</th>
            <th>Published Date</th>
            <th>Download</th>
        </tr>
        <?php
            $result=$obj->select("select * from tbl_content where category='$topic' and status='1' and del='1' order by id desc");
			$c=1;
            while($data=mysqli_fetch_assoc($result)){
        ?>
        <tr <?php if($c%2==0){ echo "style='background:#e2ebe2;'";} ?>>
        	<td><?php echo $c; ?></td>
            <td class="downloadtitle" style="max-width:300px;"><?php echo $data['mtitle'];?></td>
            <td> <?php echo $data['dates'];?></td>
            <td>
                <a href="files/contentFile/<?php echo $data['files']; ?>" 
                target="_blank">            
                    <i class="fa fa-download" aria-hidden="true"></i>
                </a>
            </td>
        </tr>
        <?php
			$c++;
            }
		?> 
        </table> 
        <div class="clear"></div>
</div>
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
	<?php
		include('includes/rightmenu_viewpoint.php');
	?>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<div class="clear"></div>