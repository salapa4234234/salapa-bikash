<?php
	if(isset($_GET['task']) && isset($_GET['id'])){
		$id=$_GET['id'];
		
		$result=$obj->select("select * from tbl_file where id='$id'");
		$data=mysqli_fetch_assoc($result);
	}
?>
<table cellpadding="0" cellspacing="0" width="100%" class="new_articles">
	<form action="admin_includes/file_manager/editfilesetup.php"
    method="post" name="addMember" enctype="multipart/form-data"  onSubmit="return(memberValidate());">
    <input type="hidden" name="admin" value="<?php echo $_SESSION['user']; ?>" />
    <input type="hidden" name="dates" value="<?php echo date('Y-m-d');?>" />
    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
    <input type="hidden" name="prefile" value="<?php echo $data['name']; ?>">
    <input type="hidden" name="topic" value="<?php echo $topic; ?>">
    <tr>
    	<th>File Title*</th>
        <td><input type="text" name="title" value="<?php echo $data['title']; ?>" placeholder="file title*" required>
        </td>
    </tr>
    <tr>
    	<th>File</th>
        <td>
            <h4 style="color:#F60;">Change File? </h4>
        	<input type="file" name="files" id="files" >
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
						echo "selected";
					}
				?>
                >Publish</option>
            	<option value=""
                	<?php
					if($data['status']!=1){
						echo "selected";
					}
				?>
                >Unpublish</option>
            </select>
        </td>
    </tr>
    <tr>
    	<th>Feature</th>
        <td>
        	<select name="feature" id="feature">
            	<option value="">Select Feature</option>
            	<option value=""
                <?php
					if($data['feature']!=1){
						echo "selected";
					}
				?>
                >No</option>
                <option value="1"
                <?php
					if($data['feature']==1){
						echo "selected";
					}
				?>
                >Yes</option>
            </select>
        </td>
    </tr>
    <tr>
    	<td colspan="2">
        	<input type="submit" name="fileedit" value="Publish" style="width:130px; float:right; 
            cursor:pointer; background:#069; border:none; color:#FFF; font-weight:bold;">
        </td>
    </tr>
    </form>
</table>