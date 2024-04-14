<table cellpadding="0" cellspacing="0" width="100%" class="add_image_gallery">
	<form action="admin_includes/gallery_manage/add_image_gallerysetup.php"
    method="post" name="new_gallery_image" enctype="multipart/form-data"  onSubmit="return(gallery_image_add_validate());">
    <input type="hidden" name="admin" value="<?php echo $_SESSION['user']; ?>" />
    <input type="hidden" name="dates" value="<?php echo date('Y-m-d');?>" />
	<tr>
    	<th>Gallery</th>
        <td>
        	<select name="gallerys" id="gallerys">
            	<option value="">Select Gallery</option>
                <?php
					$result=$obj->select("select distinct gallery_name,id from tbl_gallery_category where status='1' and del='1'");
					while($data=mysqli_fetch_assoc($result)){
				?>
                <option value="<?php echo $data['id'];?>"><?php echo $data['gallery_name']; ?></option>
                <?php
					}
				?>
            </select>
        </td>
    </tr>
    <tr>
    	<th>Image</th>
        <td>
        	<h4 style="color:#F60;">Add Image Into Gallery? 
            Only<span style="color:#0CF"> ( jpg, png and gif )</span> fromat will support!!!</h4>	
            <input type="file" name="image" id="image" >
        </td>
    </tr>
    <tr>
    	<th>Give URL</th>
        <td>
        	<input type="text" name="urls" placeholder="Give URL?" /> 
        </td>
    </tr>
    <tr>
    	<th>Title</th>
        <td><input type="text" name="title" id="title" placeholder="Enter image title?"></td>
    </tr>
    <tr>
    	<th>Alias</th>
        <td><input type="text" name="alias" id="alias" placeholder="Enter image alias?"></td>
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
    	<th>Status</th>
        <td>
        	<select name="status" id="status">
            	<option value="">Select Status</option>
                <option value="1">Publish</option>
            	<option value="">Unpublish</option>
            </select>
        </td>
    </tr>
    <tr>
    	<th>Description</th>
        <td><textarea name="content" class="ckeditor" id="ckimage"></textarea></td>
    </tr>
    <tr>
        <td colspan="2">
        	<input type="submit" name="new_images_gallery" value="Add Image" style="width:130px; float:right; height:30px; 
            cursor:pointer; background:#069; border:none; color:#FFF; font-weight:bold;">
        </td>
    </tr>
    </form>
</table>