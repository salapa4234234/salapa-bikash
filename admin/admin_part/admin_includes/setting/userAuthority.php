<table cellpadding="0" cellspacing="0" width="100%" class="addItem" style="margin-top:3px;">
	<form action="admin_includes/setting/userAuthoritySetup.php" name="userAuthority"
    method="post" enctype="multipart/form-data" onsubmit="return userAuthorityValidation()">
    <tr>
    	<th>Select User:</th>
        <td>
        	<select name="user" style="width:100%; height:40px;">
            	<option value="">Select User</option>
                <?php 
					$res=$obj->select("select * from tbl_admin where id!='$userId' order by name ");
					while($dat=mysqli_fetch_assoc($res)){
				?>
                <option value="<?php echo $dat['id']; ?>"><?php echo $dat['name']; ?></option>
                <?php
					}
				?>
            </select>
        </td>
    </tr>
    <tr>
    	<th>Authority:</th>
        <td>
        	<select name="authority" style="width:100%; height:40px;">
            	<option value="">Select Authority Type</option>
            	<option value="yes">Admin</option>
                <option value="no">Normal User</option>
                <option value="deactive">De-active</option>
            </select>
        </td>
    </tr>
    <tr>
    	<th colspan="4">
            <input type="submit" value="Set Authority" name="sureAuthority" style="width:130px; cursor:pointer;
            background:#099; border:none; color:#FFF; font-weight:bold; float:right; height:30px;">
        </th>
    </tr>
    </form>
</table>