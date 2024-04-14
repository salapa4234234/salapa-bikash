<table cellpadding="0" cellspacing="0" width="100%" class="new_articles">
	<form action="admin_includes/memberManager/addMemberSetup.php"
    method="post" name="addMember" enctype="multipart/form-data"  onSubmit="return(memberValidate());">
    <input type="hidden" name="admin" value="<?php echo $_SESSION['user']; ?>" />
    <input type="hidden" name="dates" value="<?php echo date('Y-m-d');?>" />
    <tr>
    	<th>Member Type:</th>
        <td>
        	<select name="memberType">
            	<option value="">Select Member Type</option>
                <?php
					$sql="select * from tbl_membertype where status='1'";
					$result=$obj->select($sql);
					while($data=mysqli_fetch_assoc($result)){
				?>
                <option value="<?php echo $data['id']; ?>">
				<?php echo $data['membertype'];  ?></option>
                <?php
					}
				?>
            </select>
        </td>
    </tr>
	<tr>
    	<th>Name:</th>
        <td><input type="text" name="name" id="name" placeholder=" member name?"></td>
    </tr>
    <tr>
    	<th>Position:</th>
        <td><input type="text" name="position" id="position" placeholder=" member position?"></td>
    </tr>
    <tr>
    	<th>Addre:</th>
        <td><input type="text" name="address" id="address" placeholder=" member address?"></td>
    </tr>
    <tr>
    	<th>Contact:</th>
        <td><input type="text" name="contact" id="contact" placeholder=" contact number?"></td>
    </tr>
    <tr>
    	<th>Email:</th>
        <td><input type="text" name="email" id="email" placeholder=" email addresss?"></td>
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
    	<th>Display Position</th>
        <td>
        	<select name="displayposition" id="displayposition">
            	<option value="">Display Position</option>
            	<?php
					for($i=1; $i<=200; $i++){
				?>
            	<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php
					}
				?>
            </select>
        </td>
    </tr>
    <tr>
    	<th>Image</th>
        <td>
        	<h4 style="color:#F60;">Add New Image? Only<span style="color:#0CF"> ( jpg, png and gif )</span> fromat will support!!!</h4>
        	<input type="file" name="image" id="image" >
        </td>
    </tr>
    <tr>
    	<th>Description</th>
        <td>
        	<textarea name="content" class="ckeditor" id="content_1"></textarea>
        </td>
    </tr>
    <tr>
    	<td colspan="2">
        	<input type="submit" name="memberAdd" value="Publish" style="width:130px; float:right; 
            cursor:pointer; background:#069; border:none; color:#FFF; font-weight:bold;">
        </td>
    </tr>
    </form>
</table>