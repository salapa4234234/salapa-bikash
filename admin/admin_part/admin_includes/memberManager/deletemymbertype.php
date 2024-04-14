<table cellpadding="0" cellspacing="0" width="100%;" class="article_manage">
	<tr>
    	<th>S.N</th>
        <th>Select</th>
        <th>Member Type</th>
        <th>Slug</th>
    </tr>
	<form action="admin_includes/memberManager/membercategorysetup.php" method="post">
    <?php
		$result=$obj->select("Select * from tbl_membertype");
		$row=mysqli_num_rows($result);
		$c=1;
		while($data=mysqli_fetch_array($result)){
	?>
    <input type="hidden" name="row" value="<?php echo $row; ?>" >
    <tr>
    	<td><?php echo $c; ?></td>
    	<td><input type="checkbox" name="checkbox[]" id="checkbox[]" 
        value="<?php echo $data['id']; ?>" style="width:100%;"></td>
        <td><?php echo $data['membertype']; ?></td>
        <td><?php echo $data['slug']; ?></td>
    </tr> 
    <?php
		$c++;
		}
	?>
    <tr>
    	<td colspan="10">
        	<input type="submit" name="deleteMemberTypeMultiple" value="Delete" 
            onclick="return sure_delete()" style="width:130px;
        	text-align:center; height:23px; float:right; cursor:pointer; background:#069; border:none; color:#FFF; font-weight:bold;">
        </td>
    </tr>
    </form>
</table>