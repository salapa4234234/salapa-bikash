<table cellpadding="0" cellspacing="0" width="100%;" class="article_manage">
	<form action="admin_includes/menu_manage/delete_menu_setup.php" method="post">
	<tr>
    	<th>S.N</th>
        <th>Select</th>
    	<th>Menu</th>
        <th>Position</th>
        <th>Status</th>
        <th>Adder</th>
        <th>Date</th>
    </tr>
    <?php
		$result=$obj->select("select * from tbl_menu where del='1' and menu!='' and submenu='' order by position");
		$row=mysqli_num_rows($result);
		$c=1;
		while($data=mysqli_fetch_assoc($result)){
	?>
    <input type="hidden" name="row" value="<?php echo $row; ?>">
    <tr>
    	<td><?php echo $c; ?></td>
    	<td><input type="checkbox" name="checkbox[]" id="checkbox[]" value="<?php echo $data['id']; ?>"></td>
        <td><?php echo $data['menu'];?></td>
        <td><?php echo $data['position'];?></td>
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
        	<input type="submit" name="delete_multiple_menu" value="Delete Selected" onclick="return sure_delete()" style="width:130px;
        	text-align:center; height:23px; float:right; cursor:pointer; background:#069; border:none; color:#FFF; font-weight:bold;">
        </td>
    </tr>
    </form>
</table>