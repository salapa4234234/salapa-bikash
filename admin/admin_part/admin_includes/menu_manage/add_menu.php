<table cellpadding="0" cellspacing="0" width="100%" class="new_articles">
	<form action="admin_includes/menu_manage/add_menu_setup.php"
    method="post" name="new_menu" enctype="multipart/form-data"  onSubmit="return(menu_validate());">
    <input type="hidden" name="admin" value="<?php echo $_SESSION['user']; ?>" />
    <input type="hidden" name="dates" value="<?php echo date('Y-m-d');?>" />
	<tr>
    	<th>Menu</th>
        <td><input type="text" name="menu" id="menu" style="width:50%"></td>
    </tr>
    <tr>
    	<th>Link</th>
        <td><input type="text" name="links" id="links" style="width:50%"></td>
    </tr>
    <tr>
    	<th>Category</th>
        <td>
        	<select name="category" id="category" required onChange="return getparent()">
            	<option value="">Select Category</option>
                <option value="menu">Menu</option>
                <option value="submenu">Submenu</option>
                <option value="child">Child Menu</option>
        	</select>
        </td>
    </tr>
	<script>
		function getparent(){
			var e = document.getElementById("category");
			var strUser = e.options[e.selectedIndex].value;
			if(strUser=="menu"){
				document.getElementById('parentid').style.display="none";
				document.getElementById('subparent').style.display="none";
				document.getElementById('position').style.display="block";
				document.getElementById('subposition').style.display="none";
				document.getElementById('childposition').style.display="none";
			}
			else if(strUser=="submenu"){
				document.getElementById("parentid").style.display = "block";
				document.getElementById("subparent").style.display = "none";
				document.getElementById('position').style.display="none";
				document.getElementById('childposition').style.display="none";
				document.getElementById('subposition').style.display="block";
			}
			else{
				document.getElementById("subparent").style.display = "block";
				document.getElementById("parentid").style.display = "none";
				document.getElementById('position').style.display="none";
				document.getElementById('subposition').style.display="none";
				document.getElementById('childposition').style.display="block";
			}
		}
	</script>
    <tr>
    	<th>Parent</th>
        <td>
        	<span style="display:none;" id="parentid">
        	<select name="parent">
            	<option value="">Select Parent</option>
                <?php
					$result=$obj->select("select * from tbl_menu where del='1' and menu!='' and submenu='' order by menu");
					while($data=mysqli_fetch_assoc($result)){
				?>
                	<option value="<?php echo $data['id'] ?>"><?php echo $data['menu']; ?></option>
                
				<?php
					}
                ?>
        	</select>
            </span>
            <span style="display:none;" id="subparent">
        	<select name="subparent">
            	<option value="">Select Parent</option>
                <?php
					$result=$obj->select("select * from tbl_menu where del='1' and menu='' and submenu!='' order by submenu");
					while($data=mysqli_fetch_assoc($result)){
				?>
                	<option value="<?php echo $data['id'] ?>"><?php echo $data['submenu']; ?></option>
				<?php
					}
                ?>
        	</select>
            </span>
        </td>
    </tr>
    <tr>
    	<th>Position</th>
        <td>
        	<span id="position" style="display:none;">
        	<select name="position" id="position">
            	<option value="">AT THE END OF MENU</option>
                <?php
					$result=$obj->select("select * from tbl_menu where del='1' and menu!='' and submenu='' order by position");
					while($data=mysqli_fetch_assoc($result)){
				?>
                	<option value="<?php echo $data['position'] ?>">AFTER &nbsp; <?php echo $data['menu']; ?></option>
                <?php
					$a=$data['position'];
					}
                ?>
            </select>
            </span>
            <span id="subposition" style="display:none;">
        	<select name="subposition" id="subposition">
            	<option value="">AT THE END OF MENU</option>
                <?php
					$result=$obj->select("select * from tbl_menu where del='1' and menu='' and submenu!='' order by position");
					while($data=mysqli_fetch_assoc($result)){
				?>
                	<option value="<?php echo $data['position'] ?>">AFTER &nbsp; <?php echo $data['submenu']; ?></option>
                <?php
					$aa=$data['position'];
					}
                ?>
            </select>
            </span>
            <span id="childposition" style="display:none;">
            <select name="childposition" id="childposition">
            	<option value="">AT THE END OF MENU</option>
                <?php
					$result=$obj->select("select * from tbl_menu where del='1' and child!='' order by position");
					while($data=mysqli_fetch_assoc($result)){
				?>
                	<option value="<?php echo $data['position'] ?>">AFTER &nbsp; <?php echo $data['child']; ?></option>
                <?php
					$aaa=$data['position'];
					}
                ?>
            </select>
            </span>
            <input type="hidden" name="end_index" value="<?php echo $a; ?>">
            <input type="hidden" name="sub_index" value="<?php echo $a; ?>">
            <input type="hidden" name="child_index" value="<?php echo $a; ?>">
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
    	<th>Feature</th>
        <td>
        	<select name="feature" id="feature">
            	<option value="">Select Feature</option>
                <option value="">No</option>
            	<option value="1">Yes</option>
            </select>
        </td>
    </tr>
    <tr>
    	<th></th>
        <td>
        	<input type="submit" name="menu_add" value="Add Menu" style="width:130px; float:left; 
            cursor:pointer; background:#069; border:none; color:#FFF; font-weight:bold;">
        </td>
    </tr>
    </form>
</table>