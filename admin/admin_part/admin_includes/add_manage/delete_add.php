<table cellpadding="0" cellspacing="0" width="100%;" class="article_manage">
	<tr>
    	<th>S.N</th>
        <th>Select</th>
    	<th>Client Name</th>
        <th>URL</th>
        <th>Type</th>
        <th>Status</th>
        <th>Publishre</th>
        <th>date</th>
    </tr>
	<form action="admin_includes/add_manage/delete_setup.php" method="post">
    <?php
		$result=$obj->select("Select * from tbl_add where del='1'");
		$row=mysqli_num_rows($result);
		$c=1;
		while($data=mysqli_fetch_array($result)){
	?>
    <input type="hidden" name="row" value="<?php echo $row; ?>">
    <tr>
    	<td><?php echo $c; ?></td>
    	<td><input type="checkbox" name="checkbox[]" id="checkbox[]" value="<?php echo $data['id']; ?>"></td>
        <td><?php echo $data['client_name']; ?></td>
        <td><?php echo $data['url']; ?></td>
        <td><?php echo $data['type']; ?></td>
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
        <td><?php echo $data['admin']; ?></td>
        <td><?php echo $data['dates']; ?></td>
    </tr> 
    <?php
		$c++;
		}
	?>
    <tr>
    	<td colspan="10">
        	<input type="submit" name="delete_multiple" value="Delete Selected" onclick="return sure_delete()" style="width:130px;
        	text-align:center; height:23px; float:right; cursor:pointer; background:#069; border:none; color:#FFF; font-weight:bold;">
        </td>
    </tr>
    </form>
</table>