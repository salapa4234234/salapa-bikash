<table cellpadding="0" cellspacing="0" width="100%" class="new_articles">
	<form action="admin_includes/branchManager/addNewBranchSetup.php"
    method="post" name="new_Branch" enctype="multipart/form-data"  onSubmit="return(article_validate());">
    <input type="hidden" name="admin" value="<?php echo $_SESSION['user']; ?>" />
    <input type="hidden" name="dates" value="<?php echo date('Y-m-d');?>" />
	<tr>
    	<th>Category</th>
        <td>
        	<select name="category" id="category" required>
            <option value="">Select Category</option>   
            <option value="branch">Branch</option>   
                <option value="blb">Branch Less Banking</option> 
                <option value="atm">ATM</option>     
            </select>
        </td>
    </tr>
    <tr>
    	<th>Branch Name</th>
        <td><input type="text" name="branchName" id="branchName" placeholder="Enter Branch Name" required></td>
    </tr>
    <tr>
    	<th>Branch Address</th>
        <td><input type="text" name="branchAddress" id="branchAddress" placeholder="Enter Branch Address" required></td>
    </tr>
    <tr>
    	<th>Gio Location</th>
        <td><input type="text" name="gioLocation" id="gioLocation" placeholder="Enter Gio Location"></td>
    </tr>
    <tr>
    	<th>Contact</th>
        <td><input type="text" name="contact" id="contact" placeholder="Enter Contact Number" required></td>
    </tr>
    <tr>
    	<th>Email</th>
        <td><input type="email" name="email" id="email" placeholder="Enter Email Address" required></td>
    </tr>
    <tr>
    	<th>Contact Persion</th>
        <td><input type="text" name="contactPersion" id="contactPersion" placeholder="Enter Contact persion" required></td>
    </tr>
    <tr>
    	<th>Status</th>
        <td>
        	<select name="status" id="status" required>
            	<option value="">Select Status</option>
                <option value="1">Publish</option>
            	<option value="0">Unpublish</option>
            </select>
        </td>
    </tr>
    <tr>
    	<th>Feature</th>
        <td>
        	<select name="feature" id="feature" required>
            	<option value="">Select Feature</option>
            	<option value="0">No</option>
                <option value="1">Yes</option>
            </select>
        </td>
    </tr>
    <tr>
    	<td colspan="2">
        	<input type="submit" name="new_Branch" value="Publish" style="width:130px; float:right; 
            cursor:pointer; background:#069; border:none; color:#FFF; font-weight:bold;">
        </td>
    </tr>
    </form>
</table>