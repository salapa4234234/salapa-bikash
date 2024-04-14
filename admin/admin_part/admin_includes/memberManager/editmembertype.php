<?php
	$id=$_GET['id'];
	$qry="select * from tbl_membertype where id='$id'";
	$result=$obj->select($qry);
	$data=mysqli_fetch_assoc($result);
?>
<table cellpadding="0" cellspacing="0" width="100%" class="new_articles">
	<form action="admin_includes/memberManager/membercategorysetup.php"
    method="post">
    <input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
	<tr>
    	<th>Member Type:</th>
        <td><input type="text" name="type" id="type" placeholder=" member type?"
        value="<?php echo $data['membertype']; ?>" required></td>
    </tr>
    <tr>
    	<th>Status</th>
        <td>
        	<select name="status" id="status" required>
            	<option value="">Select Status</option>
                <option value="1" <?php if($data['status']=="1")echo"selected"; ?> >
                Publish</option>
            	<option value="" <?php if($data['status']!="1")echo"selected"; ?>>
                Unpublish</option>
            </select>
        </td>
    </tr>
    <tr>
    	<td colspan="2">
        	<input type="submit" name="editmembertype" value="Edit" 
            style="width:130px; float:right; 
            cursor:pointer; background:#069; border:none; color:#FFF;
             font-weight:bold;">
        </td>
    </tr>
    </form>
</table>