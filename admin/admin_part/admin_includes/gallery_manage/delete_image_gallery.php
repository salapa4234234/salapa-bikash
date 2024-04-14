<?php
	$resuts=$obj->select("select distinct gallery_name,id from tbl_gallery_category where del='1' and status='1' order by id desc");
	while($datas=mysqli_fetch_assoc($resuts)){
	$gallery=$datas['gallery_name'];
	$id=$datas['id'];
?>
<table cellpadding="0" cellspacing="0" width="100%;">
	<tr>
    	<th style="line-height:25px; background:#CCC; text-align:left; color:#F30; padding-left:10px; font-size:14px;">
        	<?php echo $gallery; ?>
        </th>
    </tr>
</table>
<table cellpadding="0" cellspacing="0" width="100%;" class="article_manage">
	<form action="admin_includes/gallery_manage/delete_gallery_setup.php" method="post">
	<tr>
    	<th>S.N</th>
        <th>Select</th>
        <th>Image</th>
        <th>Status</th>
        <th>Adder</th>
        <th>Date</th>
    </tr>
    <?php
		$result=$obj->select("select * from tbl_gallery where parent='$id' and del='1' order by id desc");
		$row=mysqli_num_rows($result);
		$c=1;
		while($data=mysqli_fetch_assoc($result)){
	?>
    <input type="hidden" name="row" value="<?php echo $row; ?>">
    <tr>
    	<td><?php echo $c; ?></td>
    	<td><input type="checkbox" name="checkbox[]" id="checkbox[]" value="<?php echo $data['id']; ?>"></td>
        <td style="width:20%;">
        	<img src="../../images/gallery_images/<?php echo $data['image'];?>" height="40" />
        </td>
        <td>
			<?php
                $status=$data['status'];
                if($status==1){
            ?>
                <img src="them_img/active.gif">
            <?php
                }
                else{
            ?>
                <img src="them_img/passice.gif">
            <?php
                }
            ?>
        </td>
        <td style="width:20%;"><?php echo $data['admin'];?></td>
        <td style="width:20%;"><?php echo $data['dates'];?></td>
        
    </tr>
    <?php
		$c++;
		}
	?>
    <tr>
    	<td colspan="8">
        	<input type="submit" name="delete_multiple_gallery_images" value="Delete Selected" onclick="return sure_delete()" style="width:130px;
        	text-align:center; height:23px; float:right; cursor:pointer; background:#069; border:none; color:#FFF; font-weight:bold;">
        </td>
    </tr>
    </form>
</table>
<?php
	}
?>