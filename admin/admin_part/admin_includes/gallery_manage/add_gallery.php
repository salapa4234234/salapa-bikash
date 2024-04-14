<table cellpadding="0" cellspacing="0" width="100%" class="new_articles">
	<form action="admin_includes/gallery_manage/add_gallery_setup.php"
    method="post" name="new_gallery" enctype="multipart/form-data"  onSubmit="return(gallery_validate());">
    <input type="hidden" name="admin" value="<?php echo $_SESSION['user']; ?>" />
    <input type="hidden" name="dates" value="<?php echo date('Y-m-d');?>" />
	<tr>
    	<th>Gallery</th>
        <td><input type="text" name="gallery" id="gallery" style="width:70%" required></td>
    </tr>
    <tr>
    	<th>Category</th>
        <td>
        	<select name="categorys" id="categorys" required>
            	<option value="">Select Category</option>
                <option value="Image Gallery">Image Gallery</option>
                <option value="Video Gallery">Video Gallery</option>
                <option value="Audio Gallery">Audio Gallery</option>
            </select>
        </td>
    </tr>
    <tr>
    	<th>Position</th>
        <td>
        	<select name="position" id="position">
            	<option value="">AT THE END OF GALLERY</option>
                <?php
					$result=$obj->select("select * from tbl_gallery_category where del='1' and status='1' order by position");
					while($data=mysqli_fetch_assoc($result)){
				?>
                	<option value="<?php echo $data['position'] ?>">AFTER &nbsp; <?php echo $data['gallery_name']; ?></option>
                <?php
					$a=$data['position'];
					}
                ?>
            </select>
            Or
            <select name="num_position" id="num_position">
            	<option value="">Select Position</option>
                <?php
					$i=1;
					while($i!=100){
				?>
                	<option value="<?php echo $i?>"> <?php echo $i; ?></option>
                <?php
					$i++;
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
        	<input type="submit" name="gallery_add" value="Add Gallery" style="width:130px; float:left; 
            cursor:pointer; background:#069; border:none; color:#FFF; font-weight:bold;">
        </td>
    </tr>
    </form>
</table>