<style>
	.del_t tr td{
		text-align:center;
		padding:15px 0px;
		border:1px solid #EEF;}
	.del_t tr th{
		border:1px solid #EEF;
		padding:15px 0px;}
</style>
<table cellpadding="0" cellspacing="0" width="100%" class="del_t">
	<tr>
    	<th>S.N</th>
        <th>Name</th>
        <th>Address</th>
        <th>Email</th>
        <th>Contact</th>
        <th>Manage</th>
    </tr>
    <?php
		$result=$obj->select("Select * from tbl_admin where id!='$userId'");
		$sn=1;
		while($data=mysqli_fetch_assoc($result))
		{
	?>
    <tr>
    	<td><?php echo $sn; ?></td>
        <td><?php echo $data['name']; ?></td>
        <td><?php echo $data['address']; ?></td>
        <td><?php echo $data['username']; ?></td>
        <td><?php echo $data['contact']; ?></td>
        <td>
        	<form method="post" action="admin_includes/setting/delete_setup.php">
            	<input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
                <input type="hidden" name="old" value="<?php echo $data['image']; ?>" />
                <input type="hidden" name="thisid" value="<?php echo $datas['id']; ?>" />
                <input type="submit" name="admin_delete" value="" onclick="return sure_delete()"
                style="border:none; height:20px; width:20px; cursor:pointer; padding:3px 10px;
                background:url(them_img/delete12.gif) no-repeat"/>
            </form>
        </td>
    </tr>
    <?php
			$sn++;
		}
	?>
</table>