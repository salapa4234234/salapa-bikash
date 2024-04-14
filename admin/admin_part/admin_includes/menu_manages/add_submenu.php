<table cellpadding="0" cellspacing="0" width="100%" class="new_articles">
	<form action="admin_includes/menu_manage/add_submenu_setup.php"
    method="post" name="new_menu" enctype="multipart/form-data"  onSubmit="return(menu_validate());">
    <input type="hidden" name="admin" value="<?php echo $_SESSION['user']; ?>" />
    <input type="hidden" name="dates" value="<?php echo date('Y-m-d');?>" />
	<tr>
    	<th>Sub Menu</th>
        <td><input type="text" name="menu" id="menu" style="width:50%"></td>
    </tr>
    <tr>
    	<th>Links</th>
        <td><input type="text" name="links" id="links" style="width:50%"></td>
    </tr>
    <tr>
    	<th>Select Parent</th>
        <td>
        	<select name="parent" id="parent">
            	<option value="">Select Parent</option>
                <?php					
					$result=$obj->select("select * from tbl_menu where status='1' and del='1' and menu!='' and 
					submenu='' and parent='' order by position");
					while($dataa=mysqli_fetch_assoc($result)){
				?>
                	<option value="<?php echo $dataa['id'] ?>">
						<?php echo $dataa['menu']; ?>
                    </option>
                <?php
					$a=$dataa['position'];
					}
                ?>
            </select>
        </td>
    </tr>
    <tr>
    	<th>Position</th>
        <td>
        	<select name="position" id="position">
            	<option value="">AT THE END OF MENU</option>
                <?php
					$result=$obj->select("select * from tbl_menu where del='1' and menu='' and submenu!='' order by position");
					while($data=mysqli_fetch_assoc($result)){
				?>
                	<option value="<?php echo $data['position'] ?>">AFTER &nbsp; <?php echo $data['submenu']; ?></option>
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
        	<input type="submit" name="submenu_add" value="Add Sub Menu" style="width:130px; float:left; 
            cursor:pointer; background:#069; border:none; color:#FFF; font-weight:bold;">
        </td>
    </tr>
    </form>
</table>