<table cellpadding="0" cellspacing="0" width="100%" class="new_articles">
	<form action="admin_includes/virtuallearningmanager/addclasssetup.php"
    method="post" name="new_gallery" enctype="multipart/form-data">
	<tr>
    	<th>Class</th>
        <td><input type="text" name="class" id="class" style="width:70%" required></td>
    </tr>
    <tr>
    	<th>Status</th>
        <td>
        	<select name="status" id="status">
            	<option value="">Select Status</option>
                <option value="1">Active</option>
            	<option value="">Deactive</option>
            </select>
        </td>
    </tr>
    <tr>
    	<th></th>
        <td>
        	<input type="submit" name="class_add" value="Add Class" style="width:130px; float:left; 
            cursor:pointer; background:#069; border:none; color:#FFF; font-weight:bold;">
        </td>
    </tr>
    </form>
</table>