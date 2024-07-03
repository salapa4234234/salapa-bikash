<?php
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query="select * from tbl_branches where id='$id'";
    $result=($obj->select($query));
    $data=mysqli_fetch_assoc($result);
?>
<table cellpadding="0" cellspacing="0" width="100%" class="new_articles">
	<form action="admin_includes/branchManager/updateBranchSetup.php"
    method="post" name="updateBranch" enctype="multipart/form-data"  onSubmit="return(article_validate());">
    <input type="hidden" name="admin" value="<?php echo $_SESSION['user']; ?>" />
    <input type="hidden" name="dates" value="<?php echo date('Y-m-d');?>" />
    <input type="hidden" name="id" value="<?php echo $id;?>" />
	<tr>
    	<th>Category</th>
        <td>
        	<select name="category" id="category" required>
            <option value="">Select Category</option>   
            <option value="branch" <?php if($data['category']=='branch' ) echo"selected"; ?> >Branch</option>   
                <option value="blb" <?php if($data['category']=='blb' ) echo"selected"; ?>>Branch Less Banking</option> 
                <option value="atm" <?php if($data['category']=='atm' ) echo"selected"; ?>>ATM</option>     
            </select>
        </td>
    </tr>
    <tr>
    	<th>Branch Name</th>
        <td><input type="text" name="branchName" id="branchName" value="<?php echo $data['name']; ?>" placeholder="Enter Branch Name" required></td>
    </tr>
    <tr>
    	<th>Branch Address</th>
        <td><input type="text" name="branchAddress" id="branchAddress" value="<?php echo $data['address']; ?>"placeholder="Enter Branch Address" required></td>
    </tr>
    <tr>
    	<th>Gio Location</th>
        <td><input type="text" name="gioLocation" id="gioLocation" value="<?php echo $data['gioLocation']; ?>" placeholder="Enter Gio Location"></td>
    </tr>
    <tr>
    	<th>Contact</th>
        <td><input type="text" name="contact" id="contact" value="<?php echo $data['contact']; ?>" placeholder="Enter Contact Number" required></td>
    </tr>
    <tr>
    	<th>Email</th>
        <td><input type="email" name="email" id="email" value="<?php echo $data['email']; ?>" placeholder="Enter Email Address" required></td>
    </tr>
    <tr>
    	<th>Contact Persion</th>
        <td><input type="text" name="contactPersion" id="contactPersion" value="<?php echo $data['contactPersion']; ?>" placeholder="Enter Contact persion" required></td>
    </tr>
    <tr>
    	<th>Status</th>
        <td>
        	<select name="status" id="status" required>
            	<option value="">Select Status</option>
                <option value="1"<?php if($data['status']=='1' ) echo"selected"; ?>>Publish</option>
            	<option value="0"<?php if($data['status']=='0' ) echo"selected"; ?>>Unpublish</option>
            </select>
        </td>
    </tr>
    <tr>
    	<th>Feature</th>
        <td>
        	<select name="feature" id="feature" required>
            	<option value="">Select Feature</option>
            	<option value="0" <?php if($data['feature']=='0' ) echo"selected"; ?>>No</option>
                <option value="1" <?php if($data['feature']=='1' ) echo"selected"; ?>>Yes</option>
            </select>
        </td>
    </tr>
    <tr>
    	<td colspan="2">
        	<input type="submit" name="updateBranch" value="Update" style="width:130px; float:right; 
            cursor:pointer; background:#069; border:none; color:#FFF; font-weight:bold;">
        </td>
    </tr>
    </form>
</table>
<?php
}
else{
    header("location:../../loginsetup.php?category=".$categorys);
}
?>