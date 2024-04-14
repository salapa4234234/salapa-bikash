<table cellpadding="0" cellspacing="0" width="100%" class="new_articles">
	<form action="admin_includes/memberManager/membercategorysetup.php"
    method="post">
    <input type="hidden" name="admin" value="<?php echo $_SESSION['user']; ?>" />
    <input type="hidden" name="dates" value="<?php echo date('Y-m-d');?>" />
	<tr>
    	<th>Member Type:</th>
        <td><input type="text" name="type" id="type" placeholder=" member type?"
        required></td>
    </tr>
    <tr>
    	<th>Status</th>
        <td>
        	<select name="status" id="status" required>
            	<option value="">Select Status</option>
                <option value="1">Publish</option>
            	<option value="">Unpublish</option>
            </select>
        </td>
    </tr>
    <tr>
    	<td colspan="2">
        	<input type="submit" name="membertypeadd" value="Save" 
            style="width:130px; float:right; 
            cursor:pointer; background:#069; border:none; color:#FFF;
             font-weight:bold;">
        </td>
    </tr>
    </form>
</table>