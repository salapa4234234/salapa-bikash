<table cellpadding="0" cellspacing="0" width="100%" class="addUser" style="margin-top:3px;">
	<form action="admin_includes/setting/add_setup.php" name="addAdmin" 
    method="post" enctype="multipart/form-data" onsubmit="return addAdminValidation()">
    <tr>
    	<th>Name:</th>
    </tr>
    <tr>
        <td><input type="text" name="name"></td>
    </tr>
    <tr>
    	<th>Address:</th>
    </tr>
    <tr>
        <td><input type="text" name="address"></td>
    </tr>
    <tr>
    	<th>Gender:</th>
    </tr>
    <tr>
        <td>
        	<select name="gender" style="width:99%; height:30px; border:1px solid #CCC;">
            	<option value="">Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </td>
    </tr>
    <tr>
    </tr>
    	<th>Profile Pictur:</th>
    <tr>
        <td><input type="file" name="profile" style=" background:#DDF;" ></td>
    </tr>
    <tr>
    </tr>
    	<th>Company/ORG:</th>
    <tr>
        <td><input type="text" name="company"></td>
    </tr>
    <tr>
    	<th>Position:</th>
    </tr>
    <tr>
        <td><input type="text" name="position"></td>
    </tr>
    <tr>
    	<th>Contact:</th>
    </tr>
    <tr>
        <td><input type="text" name="contact"></td>
    </tr>
    <tr>
    	<th>Email:</th>
    </tr>
    <tr>
        <td><input type="text" name="email"></td>
    </tr>
    <tr>
    	<th>Password:</th>
    </tr>
    <tr>
        <td><input type="password" name="password"></td>
    </tr>
    <tr>
    	<th>Re-Password:</th>
    </tr>
    <tr>
        <td><input type="password" name="password1"></td>
    </tr>
    <tr>
    	<th colspan="4">
            <input type="submit" value="Add New User" name="Sign_up" style="width:130px; cursor:pointer;
            background:#099; border:none; color:#FFF; font-weight:bold; float:right; height:30px;">
        </th>
    </tr>
    </form>
</table>