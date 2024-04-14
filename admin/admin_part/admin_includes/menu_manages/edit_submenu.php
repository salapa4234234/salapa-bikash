<?php
	$result=$obj->select("select * from tbl_menu where id='$id'");
	$data=mysqli_fetch_assoc($result);
	$submenu=$data['submenu'];
	$position=$data['position'];
	$parent=$data['parent'];
	$status=$data['status'];
?>
<table cellpadding="0" cellspacing="0" width="100%" class="new_articles">
	<form action="admin_includes/menu_manage/edit_submenu_setup.php"
    method="post" name="new_menu" enctype="multipart/form-data"  onSubmit="return(menu_validate());">
    <input type="hidden" name="admin" value="<?php echo $_SESSION['user']; ?>" />
    <input type="hidden" name="dates" value="<?php echo date('Y-m-d');?>" />
    <input type="hidden" name="id" value="<?php echo $id; ?>" />
	<tr>
    	<th>Sub Menu</th>
        <td><input type="text" name="menu" id="menu" value="<?php echo $submenu; ?>" style="width:50%"></td>
    </tr>
    <tr>
    	<th>Links</th>
        <td><input type="text" name="links" id="links" value="<?php echo $data['link']; ?>" style="width:50%"></td>
    </tr>
    <tr>
    	<th>Position</th>
        <td>
        	<select name="position" id="position">
            	<option value="">AT THE END OF Menu</option>
                <?php					
					$result=$obj->select("select * from tbl_menu where del='1' and menu='' and 
					submenu!='' and parent='$parent' order by position");
					while($dataa=mysqli_fetch_assoc($result)){
				?>
                	<option value="<?php echo $dataa['position'] ?>"
                    	<?php
							if($position==$dataa['position'] && $submenu==$dataa['submenu']){
								echo"selected='selected'";
							}
						?>
                    ><?php echo $dataa['position']; ?> &nbsp; 
					<?php 
						if($position!=$dataa['position'] || $submenu!=$dataa['submenu']){
							echo "MOVE AFTER";
						}
					?> 
					<?php echo $dataa['submenu']; ?>
                    </option>
                <?php
					$a=$dataa['position'];
					}
                ?>
            </select>OR
            <select name="nemeric_position">
           		<option value="">Choose Position</option>
                <?php
					for($i=0;$i<=50; $i++){
				?>
                <option value="<?php echo $i ?>"><?php echo $i; ?></option>
                <?php
					}
				?>
            </select>
            <input type="hidden" name="end_index" value="<?php echo $a; ?>">
        </td>
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
                	<option value="<?php echo $dataa['id'] ?>"
                    	<?php
							if($parent==$dataa['id']){
								echo"selected='selected'";
							}
						?>
                    ><?php echo $dataa['menu']; ?> &nbsp; 
					<?php 
						if($parent!=$dataa['id']){
							echo "As Parent";
						}
					?> 
                    </option>
                <?php
					$a=$dataa['position'];
					}
                ?>
            </select>
        </td>
    </tr>
    <tr>
    	<th>Status</th>
        <td>
        	<select name="status" id="status">
            	<option value="">Select Status</option>
                <option value="1"
                	<?php
						if($data['status']==1){
							echo "selected='selected'";
						}
					?>
                >Active</option>
            	<option value=""
                	<?php
						if($data['status']==0){
							echo "selected='selected'";
						}
					?>
                >Deactive</option>
            </select>
        </td>
    </tr>
    <tr>
    	<th></th>
        <td>
        	<input type="submit" name="submenu_edit" value="Edit Sub Menu" style="width:130px; float:left; 
            cursor:pointer; background:#069; border:none; color:#FFF; font-weight:bold;">
        </td>
    </tr>
    </form>
</table>