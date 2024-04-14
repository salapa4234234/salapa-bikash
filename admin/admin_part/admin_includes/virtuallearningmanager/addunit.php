<table cellpadding="0" cellspacing="0" width="100%" class="new_articles">
	<form action="admin_includes/virtuallearningmanager/addunitsetup.php"
    method="post" name="new_gallery" enctype="multipart/form-data">
    <input type="hidden" name="classid" value="<?php echo $_GET['class']; ?>">
    <input type="hidden" name="subjectid" value="<?php echo $_GET['subject']; ?>">
	<tr>
    	<th>Unit</th>
        <td><input type="text" name="unit" id="unit" style="width:70%" required></td>
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
        	<input type="submit" name="unit_add" value="Add Unit" style="width:130px; float:left; 
            cursor:pointer; background:#069; border:none; color:#FFF; font-weight:bold;">
        </td>
    </tr>
    </form>
</table>