
<?php
	if(isset($_GET['msg']) && $_GET['msg']=="deleteitem"){
		echo "<h3 style='color:#F00;'>Delete Item First!!!</h3>";
	}
	$resuts=$obj->select("select distinct category from tbl_gallery_category where del!='1' and status='1' order by position");
	while($datas=mysqli_fetch_assoc($resuts)){
	$category=$datas['category'];
?>
<table cellpadding="0" cellspacing="0" width="100%;">
	<tr>
    	<th style="line-height:25px; background:#CCC; text-align:left; color:#F30; padding-left:10px; font-size:14px;">
        	<?php echo $category; ?>
        </th>
    </tr>
</table>
<table cellpadding="0" cellspacing="0" width="100%;" class="article_manage">
	<form action="admin_includes/gallery_manage/delete_gallery_setup.php" method="post">
	<tr>
    	<th>S.N</th>
        <th>Select</th>
        <th>Gallery Name</th>
        <th>Status</th>
        <th>Adder</th>
        <th>Date</th>
    </tr>
    <?php
		$result=$obj->select("select * from tbl_gallery_category where category='$category' and del!='1' order by position");
		$row=mysqli_num_rows($result);
		$c=1;
		while($data=mysqli_fetch_assoc($result)){
	?>
    <input type="hidden" name="row" value="<?php echo $row; ?>">
    <tr>
    	<td><?php echo $c; ?></td>
    	<td><input type="checkbox" name="checkbox[]" id="checkbox[]" value="<?php echo $data['id']; ?>"></td>
        <td><?php echo $data['gallery_name'];?></td>
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
                <img src="them_img/delete.gif">
            <?php
                }
            ?>
        </td>
        <td><?php echo $data['admin'];?></td>
        <td><?php echo $data['dates'];?></td>
        
    </tr>
    <?php
		$c++;
		}
	?>
    <tr>
    	<td colspan="8">
        	<input type="submit" name="delete_gallery_permanent" value="Delete parmanent" 
            onclick="return sure_delete_parmanent()" style="width:130px;
        	text-align:center; height:23px; float:right; cursor:pointer; background:#069; border:none; 
            color:#FFF; font-weight:bold;">
            <input type="submit" name="recover_gallery_multiple" value="Restore Trashed" onclick="return sure_restore()" 
            style="width:130px; margin-right:20px;  text-align:center; height:23px; float:right; cursor:pointer; 
            background:#069; border:none; color:#FFF; font-weight:bold;">
        </td>
    </tr>
    </form>
</table>
<?php
	}
?>