<?php
	if(isset($_GET['id'])){
		$id=$_GET['id'];
	}
	else{
		$id="no";
	}
?>
<?php
	$result=$obj->select("select * from tbl_content where id='$id'");
	$data=mysqli_fetch_assoc($result);
	$id=$data['id'];
	$category=$data['category'];
	$status=$data['status'];
	$feature=$data['display_order'];
	$align=$data['alignment'];
	$prefile=$data['files'];
	$preimg=$data['image'];
	$decrase_size=$data['decrase_size'];
	$small_image=$data['small_image'];
?>
<table cellpadding="0" cellspacing="0" width="100%" class="new_articles">
	<tr>
    	<th>Title</th>
        <td><?php echo $data['mtitle']; ?></td>
    </tr>
    <tr>
    	<th>Alias</th>
        <td><?php echo $data['title']; ?></td>
    </tr>
    <tr>
    	<th>Sources</th>
        <td><?php echo $data['sources']; ?></td>
    </tr>
    <tr>
    	<th>Category</th>
        <td>
        	<?php echo $category; ?>
        </td>
    </tr>
    <tr>
    	<th>Status</th>
        <td><?php echo $status; ?>
        </td>
    </tr>
    <tr>
    	<th>Feature</th>
        <td><?php echo $feature; ?>
        </td>
    </tr>
    <tr>
    	<th>Content File</th>
        <td>
			<?php 
				if($data['files']!=""){
					echo $data['files'];
				}
				else{
					echo "There is no file!!!";
				}
			?> 
        </td>
    </tr>
    <tr>
    	<th>Image</th>
        <td>
        	<?php
				$img=$data['image'];
				if($img!=""){
			?>
					<img src="../../images/content_images/<?php echo $img;?>" height="80" style=" margin-right:10px;"/>
			<?php
                }
				else{
					echo "The content have no image!!!";
				}
			?>
        </td>
    </tr>
    <tr>
    	<th>Image Size</th>
        <td>
        <?php
			if($img!=""){
				echo $decrase_size;
			}
			else{
				echo "No image!!!";
			}
		?>
        </td>
    </tr>
    <tr>
    	<th>Image Alignment</th>
        <td>
			<?php 
				if($img!=""){
                	echo $data['alignment']; 
				}
				else{
					echo "No image!!!";
				}
            ?>
        </td>
    </tr>
    <tr>
    	<th>Article</th>
        <td>
        	<?php echo $data['content']; ?>
        </td>
    </tr>
    <tr>
    	<th>Meta Keyword</th>
        <td>
        	<?php echo $data['metakeyword']; ?>
        </td>
    </tr>
    <tr>
    	<th>Meta Data</th>
        <td><?php echo $data['metadata']; ?></td>
    </tr>
    <tr>
    	<th>Meta Description</th>
        <td><?php echo $data['metadescription']; ?></td>
    </tr>
</table>