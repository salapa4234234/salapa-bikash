<table cellpadding="0" cellspacing="0" width="100%" class="new_articles">
	<form action="admin_includes/add_manage/new_add_setup.php"
    method="post" name="new_add" enctype="multipart/form-data"  onSubmit="return(advertise_validate());">
    <input type="hidden" name="admin" value="<?php echo $_SESSION['user']; ?>" />
    <input type="hidden" name="dates" value="<?php echo date('Y-m-d');?>" />
    <input type="hidden" name="category" value="NA">
	<tr>
    	<th>File size:-</th>
        <td>
            Max File size 2MB only
        </td>
    </tr>
    <tr>
    	<th>Title</th>
        <td><input type="text" name="client" id="client" placeholder="Enter title?"></td>
    </tr>
    <tr>
    	<th>Fiscal Year</th>
        <td><input type="text" name="url" id="url" placeholder="ex- 2077/078"></td>
    </tr>
    <tr>
    	<th>Investor Relations Type</th>
        <td>
        	<select name="type" id="type">
            	<option value="">Select Investor Relations Type</option>
                <option value="financialindicators" > Financial Indicators</option>
                <option value="quarterlyreport" > Quarterly Report</option>
                <option value="annualreport" >Annual Report</option>
                <option value="baselreport" >Basel Report</option>
                <option value="baserateandspreadrate" >Base Rate & Spread Rate</option>
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
    	<th>Investor Relations File</th>
       <td>
            <h4 style="color:#F60;">Add Investor Relation File? 
            Only<span style="color:#0CF"> ( PDF )</span> fromat will support!!!</h4>	
            <input type="file" name="image" id="image" >
        </td>
    </tr>
    </tr>
    <tr>
        <td colspan="2">
        	<input type="submit" name="new_advertise_" value="Add Investor Relations" style="width:230px; float:right; 
            cursor:pointer; background:#069; border:none; color:#FFF; font-weight:bold;">
        </td>
    </tr>
    </form>
</table>