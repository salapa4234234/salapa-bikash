<?php
	if(isset($_GET['classid'])){
		$classid=$_GET['classid'];
	}
	if(isset($_GET['subjectid'])){
		$subjectid=$_GET['subjectid'];
	}
	if(isset($_GET['unitid'])){
		$unitid=$_GET['unitid'];
	}
	if(isset($_GET['id'])){
		$id=$_GET['id'];
	}
	$sql="select * from tbl_meterial where id='$id'";
	$result=$obj->select($sql);
	$data=mysqli_fetch_assoc($result);
?>
<table cellpadding="0" cellspacing="0" width="100%" class="new_articles">
	<form action="admin_includes/virtuallearningmanager/editmeterialsetup.php"
    method="post" name="new_gallery" enctype="multipart/form-data">
    <input type="hidden" name="admin" value="<?php echo $_SESSION['user']; ?>">
    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
    <input type="hidden" name="classid" value="<?php echo $classid; ?>">
    <input type="hidden" name="subjectid" value="<?php echo $subjectid; ?>">
    <input type="hidden" name="unitid" value="<?php echo $unitid; ?>">
    <input type="hidden" name="prefile" value="<?php echo $data['meterial']; ?>">
	<tr>
    	<th>Title</th>
        <td><input type="text" name="title" id="title" value="<?php echo $data['title']; ?>" style="width:70%" required></td>
    </tr>
    <tr>
    	<th>Category</th>
        <td>
        	<select name="category" required>
            	<option value="">Select Category</option>
                <option value="Video" <?php if($data['category']=="Video")echo"selected"; ?>>Video</option>
                <option value="Audio" <?php if($data['category']=="Audio")echo"selected"; ?>>Audio</option>
                <option value="File" <?php if($data['category']=="File")echo"selected"; ?>>File</option>
            </select>
        </td>
    </tr>
    <tr>
    	<th>File</th>
        <td style="color:#F00">
            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> &nbsp; &nbsp; Change? 
            <input type="file" name="files">
        </td>
    </tr>
    <tr>
    	<th>Status</th>
        <td>
        	<select name="status" id="status">
            	<option value="">Select Status</option>
                <option value="1" <?php if($data['status']==1)echo "selected"; ?>>Active</option>
            	<option value="" <?php if($data['status']!=1)echo "selected"; ?>>Deactive</option>
            </select>
        </td>
    </tr>
    <tr>
    	<th></th>
        <td>
        	<input type="submit" name="meterial_edit" value="Edit Meterial" style="width:130px; float:left; 
            cursor:pointer; background:#069; border:none; color:#FFF; font-weight:bold;">
        </td>
    </tr>
    </form>
</table>