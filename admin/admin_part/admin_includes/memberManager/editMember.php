<?php
	if(isset($_GET['task']) && isset($_GET['id'])){
		$id=$_GET['id'];
		
		$result=$obj->select("select * from tbl_member where id='$id'");
		$data=mysqli_fetch_assoc($result);
	}
?>
<table cellpadding="0" cellspacing="0" width="100%" class="new_articles">
	<form action="admin_includes/memberManager/editMemberSetup.php"
    method="post" name="addMember" enctype="multipart/form-data"  onSubmit="return(memberValidate());">
    <input type="hidden" name="admin" value="<?php echo $_SESSION['user']; ?>" />
    <input type="hidden" name="dates" value="<?php echo date('Y-m-d');?>" />
    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
    <input type="hidden" name="preimage" value="<?php echo $data['image']; ?>">
    <tr>
    	<th>Member Type:</th>
        <td>
        	<select name="memberType">
            	<option value="">Select Member Type</option>
                <?php
					$sql1="select * from tbl_membertype where status='1'";
					$result1=$obj->select($sql1);
					while($data1=mysqli_fetch_assoc($result1)){
				?>
                <option value="<?php echo $data1['id']; ?>"
                <?php if($data1['id']==$data['membertypeid'])
				{echo "selected='selected'" ;} ?>
                >
				<?php echo $data1['membertype'];  ?></option>
                <?php
					}
				?>
            </select>
        </td>
    </tr>
	<tr>
    	<th>Name:</th>
        <td><input type="text" name="name" id="name" value="<?php echo $data['memberName']; ?>" placeholder=" member name?"></td>
    </tr>
    <tr>
    	<th>Position:</th>
        <td><input type="text" name="position" id="position" value="<?php echo $data['position']; ?>" placeholder=" member position?"></td>
    </tr>
    <tr>
    	<th>Addre:</th>
        <td><input type="text" name="address" id="address" value="<?php echo $data['address']; ?>" placeholder=" member address?"></td>
    </tr>
    <tr>
    	<th>Contact:</th>
        <td><input type="text" name="contact" id="contact" value="<?php echo $data['contact']; ?>" placeholder=" contact number?"></td>
    </tr>
    <tr>
    	<th>Email:</th>
        <td><input type="text" name="email" id="email" value="<?php echo $data['email']; ?>" placeholder=" email addresss?"></td>
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
    	<th>Display Position</th>
        <td>
        	<select name="displayposition" id="displayposition">
            	<option value="">Display Postion</option>
                <?php
					for($i=1; $i<=200; $i++){
				?>
            	<option value="<?php echo $i; ?>"
                <?php
					if($data['displayposition']==$i){
						echo "selected";
					}
				?>
                ><?php echo $i; ?></option>
                <?php
					}
				?>
            </select>
        </td>
    </tr>
    <tr>
    	<th>Image</th>
        <td>
        	<?php
				if($data['image']==""){
			?>
        	<h4 style="color:#F60;">Add New Image? Only<span style="color:#0CF"> ( jpg, png and gif )</span> fromat will support!!!</h4>
        	<input type="file" name="image" id="image" >
            <?php
				}
				else{
			?>
            <img src="../../images/memberImages/<?php echo $data['image']; ?>" height="100">
            <h4 style="color:#F60;">Change Image? Only<span style="color:#0CF"> ( jpg, png and gif )</span> fromat will support!!!</h4>
        	<input type="file" name="image" id="image" >
            <?php
				}
			?>
        </td>
    </tr>
    <tr>
    	<th>Description</th>
        <td>
        	<textarea name="content" class="ckeditor" id="content_1"><?php echo $data['content']; ?></textarea>
        </td>
    </tr>
    <tr>
    	<td colspan="2">
        	<input type="submit" name="memberEdit" value="Publish" style="width:130px; float:right; 
            cursor:pointer; background:#069; border:none; color:#FFF; font-weight:bold;">
        </td>
    </tr>
    </form>
</table>