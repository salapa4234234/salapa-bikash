<?php
	if(isset($_GET['classid'])){
		$classid=$_GET['classid'];
	}
	
	if(isset($_GET['id'])){
		$id=$_GET['id'];
	}
	$sql="select * from tbl_subject where id='$id'";
	$result=$obj->select($sql);
	$data=mysqli_fetch_assoc($result);
?>
<table cellpadding="0" cellspacing="0" width="100%" class="new_articles">
	<form action="admin_includes/virtuallearningmanager/editsubjectsetup.php"
    method="post" name="new_gallery" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
    <input type="hidden" name="classid" value="<?php echo $classid; ?>">
	<tr>
    	<th>Subject</th>
        <td><input type="text" name="subject" id="subject" value="<?php echo $data['subject']; ?>" style="width:70%" required></td>
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
        	<input type="submit" name="Subject_edit" value="Edit Subject" style="width:130px; float:left; 
            cursor:pointer; background:#069; border:none; color:#FFF; font-weight:bold;">
        </td>
    </tr>
    </form>
</table>