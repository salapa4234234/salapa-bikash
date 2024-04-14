<table cellpadding="0" cellspacing="0" width="100%" class="new_articles">
	<form action="admin_includes/category_manage/add_category_setup.php"
    method="post" name="new_category" enctype="multipart/form-data"  onSubmit="return(category_validate());">
    <input type="hidden" name="admin" value="<?php echo $_SESSION['user']; ?>" />
    <input type="hidden" name="dates" value="<?php echo date('Y-m-d');?>" />
	<tr>
    	<th>Category</th>
        <td><input type="text" name="category" id="category" style="width:50%"></td>
    </tr>
    <tr>
    	<th>Links</th>
        <td><input type="text" name="links" id="links" style="width:50%"></td>
    </tr>
    <tr>
    	<th>Position</th>
        <td>
        	<select name="position" id="position">
            	<option value="">AT THE END OF CATEGORY</option>
                <?php
					$result=$obj->select("select * from tbl_category where del='1' order by position");
					while($data=mysqli_fetch_assoc($result)){
				?>
                	<option value="<?php echo $data['position'] ?>">AFTER &nbsp; <?php echo $data['category']; ?></option>
                <?php
					$a=$data['position'];
					}
                ?>
            </select>
            <input type="hidden" name="end_index" value="<?php echo $a; ?>">
        </td>
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
        	<input type="submit" name="category_add" value="Add Category" style="width:130px; float:left; 
            cursor:pointer; background:#069; border:none; color:#FFF; font-weight:bold;">
        </td>
    </tr>
    </form>
</table>