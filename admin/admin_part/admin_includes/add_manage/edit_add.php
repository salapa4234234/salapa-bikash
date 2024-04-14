<?php
	$result=$obj->select("select * from tbl_add where id='$id'");
	$data=mysqli_fetch_assoc($result);
	$id=$data['id'];
	$type=$data['type'];
	$category=$data['category'];
	$status=$data['status'];
	$preimg=$data['image'];
?>
<table cellpadding="0" cellspacing="0" width="100%" class="new_articles">
	<form action="admin_includes/add_manage/edit_add_setup.php"
    method="post" name="add_edit" enctype="multipart/form-data" onSubmit="return(advertise_edit_validate());">
    <input type="hidden" name="admin" value="<?php echo $_SESSION['user']; ?>" />
    <input type="hidden" name="dates" value="<?php echo date('Y-m-d');?>" />
    <input type="hidden" name="category" value="NA">
    <input type="hidden" name="id" value="<?php echo $id; ?>" />
    <input type="hidden" name="preimg" value="<?php echo $preimg; ?>" />
	<tr>
    	<th>Title</th>
        <td><input type="text" name="client" id="client" value="<?php echo $data['client_name']; ?>"></td>
    </tr>
    <tr>
    	<th>Fiscal Year</th>
        <td><input type="text" name="url" id="url" value="<?php echo $data['url']; ?>" placeholder="EX purnakhabar.com"></td>
    </tr>
    <tr>
    	<th>Investor Relations Type</th>
        <td>
        	<select name="type" id="type">
            	<option value="">Select Investor Relations Type</option>
                <option value="financialindicators"
                	<?php
						if($type=="financialindicators"){
							echo "selected='selected'";
						}
					?>
                > Financial Indicators</option>
                <option value="quarterlyreport"
                	<?php
						if($type=="quarterlyreport"){
							echo "selected='selected'";
						}
					?>
                > Quarterly Report</option>
                <option value="annualreport"
                	<?php
						if($type=="annualreport"){
							echo "selected='selected'";
						}
					?>
                > Annual Repor</option>
                <option value="baselreport"
                	<?php
						if($type=="baselreport"){
							echo "selected='selected'";
						}
					?>
                > Basel Report</option>
                <option value="baserateandspreadrate"
                	<?php
						if($type=="baserateandspreadrate"){
							echo "selected='selected'";
						}
					?>
                > Base Rate & Spread Rate</option>
            </select>
        </td>
    </tr>
    <tr>
    	<th>Status</th>
        <td>
        	<select name="status" id="status">
            	<option value="">Select Status</option>
                <option value="1"
                	<?php
						if($status==1){
							echo "selected='selected'";
						}
					?>
                >Publish</option>
            	<option value=""
                <?php
						if($status==0){
							echo "selected='selected'";
						}
				?>
                >Unpublish</option>
            </select>
        </td>
    </tr>
    <tr>
    	<th>Investor Relation File</th>
        <td>
            <h4 style="color:#F60;">Do you change investor relations file? 
            Only<span style="color:#0CF"> (PDF) </span> fromat will support!!!</h4>	
            <input type="file" name="image" id="image" >
          
        </td>
    </tr>
    </tr>
    <tr>
        <td colspan="2">
        	<input type="submit" name="advertise_edit_" value="change" style="width:130px; float:right; 
            cursor:pointer; background:#069; border:none; color:#FFF; font-weight:bold;">
        </td>
    </tr>
    </form>
</table>