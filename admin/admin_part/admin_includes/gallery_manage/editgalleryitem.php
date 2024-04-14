<?php
	$id=$_GET['id'];
	$result=$obj->select("select * from tbl_gallery where id='$id'");
	$data=mysqli_fetch_assoc($result);
	$parentid=$data['parent'];
	$results=$obj->select("select * from tbl_gallery_category where id='$parentid'");
	$datas=mysqli_fetch_assoc($results);
	$category=$datas['category'];
?>
<table cellpadding="0" cellspacing="0" width="100%" class="new_articles">
	<form action="admin_includes/gallery_manage/editgalleryitemsetup.php"
    method="post" name="new_gallery" enctype="multipart/form-data"  onSubmit="return(gallery_validate());">
    <input type="hidden" name="admin" value="<?php echo $_SESSION['user']; ?>" />
    <input type="hidden" name="dates" value="<?php echo date('Y-m-d');?>" />
    <input type="hidden" name="id" value="<?php echo $data['id'] ;?>" />
    <input type="hidden" name="prefile" value="<?php echo $data['image'] ;?>" />
    <input type="hidden" name="open" value="<?php echo $parentid ;?>" />
	<tr>
    	<th>Title</th>
        <td><input type="text" name="title" id="title" required 
        value="<?php echo $data['title'];  ?>" style="width:70%" required></td>
    </tr>
    <tr>
    	<th>Alias</th>
        <td><input type="text" name="alias" id="alias" 
        value="<?php echo $data['alias'];  ?>" style="width:70%" ></td>
    </tr>
    <tr>
    	<th>Gallery</th>
        <td>
        	<select name="parent" id="parent" required>
            	<option value="">Select Gallery</option>
                <?php
					$res=$obj->select("select * from tbl_gallery_category where category='$category'");
					while($da=mysqli_fetch_assoc($res)){
				?>
                <option value="<?php echo $da['id']; ?>" <?php if($data['parent']==$da['id'])
				echo "selected"; ?>><?php echo $da['gallery_name']; ?></option>
                <?php
					}
				?>
            </select>
        </td>
    </tr>
    <tr>
    	<th>Image</th>
        <td>
        	<input type="file" name="files" >
        	<span style="color:#F00;">Change?</span>
        </td>
    </tr>
    <tr>
    	<th>Status</th>
        <td>
        	<select name="status" id="status">
            	<option value="">Select Status</option>
                <option value="1" <?php if($data['status']=="1") echo "selected"; ?>>Active</option>
            	<option value="" <?php if($data['status']!="1") echo "selected"; ?>>Deactive</option>
            </select>
        </td>
    </tr>
    <tr>
    	<th>Feature</th>
        <td>
        	<select name="feature" id="feature">
            	<option value="">Select Feature</option>
                <option value="1" <?php if($data['feature']=="1") echo "selected"; ?>>Yes</option>
            	<option value="" <?php if($data['feature']!="1") echo "selected"; ?>>No</option>
            </select>
        </td>
    </tr>
    <tr>
    	<th></th>
        <td>
        	<input type="submit" name="edit_gallery_item" value="Edit Gallery" style="width:130px; float:left; 
            cursor:pointer; background:#069; border:none; color:#FFF; font-weight:bold;">
        </td>
    </tr>
    </form>
</table>