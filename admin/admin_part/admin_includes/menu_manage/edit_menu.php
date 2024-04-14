<?php
	$result=$obj->select("select * from tbl_menu where id='$id'");
	$data=mysqli_fetch_assoc($result);
	$menu=$data['menu'];
	$status=$data['status'];
?>

<table cellpadding="0" cellspacing="0" width="100%" class="new_articles">
	<form action="admin_includes/menu_manage/edit_menu_setup.php"
    method="post" name="new_menu" enctype="multipart/form-data"  onSubmit="return(menu_validate());">
    <input type="hidden" name="admin" value="<?php echo $_SESSION['user']; ?>" />
    <input type="hidden" name="dates" value="<?php echo date('Y-m-d');?>" />
    <input type="hidden" name="id" value="<?php echo $id; ?>" />
	<tr>
    	<th>Menu</th>
        <td><input type="text" name="menu" id="menu" value="<?php 
		if($data['menu']!="") echo $data['menu']; 
		else if($data['submenu']!="") echo $data['submenu'];
		else echo $data['child'];
		?>" style="width:50%"></td>
    </tr>
    <tr>
    	<th>Link</th>
        <td><input type="text" readonly name="links" id="links" value="<?php echo $data['link']; ?>" style="width:50%;"></td>
    </tr>
    <tr>
    	<th>Category</th>
        <td>
        	<select name="category" id="category" required onChange="return getparent()">
            	<option value="">Select Category</option>
                <option value="menu" <?php if($data['category']=="menu") echo "selected"; ?>>Menu</option>
                <option value="submenu" <?php if($data['category']=="submenu") echo "selected"; ?>>Submenu</option>
                <option value="child" <?php if($data['category']=="child") echo "selected"; ?>>Child Menu</option>
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
        	<span style="display:<?php if($data['category']=="submenu") echo"block"; else echo"none"; ?>;" id="parentid">
        	<select name="parent">
            	<option value="">Select Parent</option>
                <?php
					$results=$obj->select("select * from tbl_menu where del='1' and menu!='' and submenu='' order by menu");
					while($datas=mysqli_fetch_assoc($results)){
				?>
                	<option value="<?php echo $datas['id'] ?>" 
					<?php if($data['parent']==$datas['id']) echo "selected"; ?>><?php echo $datas['menu']; ?></option>
                
				<?php
					}
                ?>
        	</select>
            </span>
            <span style="display:<?php if($data['category']=="child") echo "block"; else echo "none"; ?>;" id="subparent">
        	<select name="subparent">
            	<option value="">Select Parent</option>
                <?php
					$results=$obj->select("select * from tbl_menu where del='1' and menu='' and submenu!='' order by submenu");
					while($datas=mysqli_fetch_assoc($results)){
				?>
                	<option value="<?php echo $datas['id'] ?>"
					<?php if($data['parent']==$datas['id']) echo "selected"; ?>><?php echo $datas['submenu']; ?></option>
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
        	<span id="position" style="display:<?php if($data['category']=="menu") 
			echo "block"; else echo "none"; ?>; float:left;">
        	<select name="position" id="position">
            	<option value="">AT THE END OF MENU</option>
                <?php
					$results=$obj->select("select * from tbl_menu where del='1' and menu!='' and submenu='' order by position");
					while($datas=mysqli_fetch_assoc($results)){
				?>
                	<option value="<?php echo $datas['position'] ?>" 
					<?php if($data['position']==$datas['position']) echo "selected"; ?>>
                    AFTER &nbsp; <?php echo $datas['menu']; ?></option>
                <?php
					$a=$datas['position'];
					}
                ?>
            </select>
            </span>
            <span id="subposition" style="display:<?php if($data['category']=="submenu") 
			echo "block"; else echo "none"; ?>; float:left;">
        	<select name="subposition" id="subposition">
            	<option value="">AT THE END OF MENU</option>
                <?php
					$results=$obj->select("select * from tbl_menu where del='1' and menu='' and submenu!='' order by position");
					while($datas=mysqli_fetch_assoc($results)){
				?>
                	<option value="<?php echo $datas['position'] ?>"
                    <?php if($data['position']==$datas['position']) echo "selected"; ?>>
                    AFTER &nbsp; <?php echo $datas['submenu']; ?></option>
                <?php
					$aa=$datas['position'];
					}
                ?>
            </select>
            </span>
            <span id="childposition" style="display:<?php if($data['category']=="child") 
			echo "block"; else echo "none"; ?>; float:left;">
            <select name="childposition" id="childposition">
            	<option value="">AT THE END OF MENU</option>
                <?php
					$results=$obj->select("select * from tbl_menu where del='1' and child!='' order by position");
					while($datas=mysqli_fetch_assoc($results)){
				?>
                	<option value="<?php echo $datas['position'] ?>"
                    <?php if($data['position']==$datas['position']) echo "selected"; ?>
                    >AFTER &nbsp; <?php echo $datas['child']; ?></option>
                <?php
					$aaa=$datas['position'];
					}
                ?>
            </select>
            </span> &nbsp; OR
            <select name="nemeric_position">
            	<option value="">Select Position</option>
                <?php
					for($i=1; $i<=200; $i++){
				?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php
					}
				?>
            </select>
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
                <option value="1" <?php if($status=="1") echo "selected"; ?>>Active</option>
            	<option value="" <?php if($status!="1") echo "selected"; ?>>Deactive</option>
            </select>
        </td>
    </tr>
    <tr> 
    	<th>Feature</th>
        <td>
        	<select name="feature" id="feature">
            	<option value="">Select Feature</option>
                <option value="" <?php if($data['feature']!="1") echo "selected"; ?>>No</option>
            	<option value="1"<?php if($data['feature']=="1") echo "selected"; ?>>Yes</option>
            </select>
        </td>
    </tr>
    <tr>
    	<th></th>
        <td>
        	<input type="submit" name="menu_edit" value="Edit Menu" style="width:130px; float:left; 
            cursor:pointer; background:#069; border:none; color:#FFF; font-weight:bold;">
        </td>
    </tr>
    </form>
</table>