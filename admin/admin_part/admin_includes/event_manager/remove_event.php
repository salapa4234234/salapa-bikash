<table cellpadding="0" cellspacing="0" width="100%" class="new_articles"  style="margin-top:20px; height:250px;">
	<?php
		$result=$obj->select("select * from tbl_event");
		$data=mysqli_fetch_assoc($result);
		if($data['event_status']==""){
	?>
    <tr>
    	<th>Event Deactivated By-</th>
        <td>
        	<span style="color:#FFF; padding:7px 82px;  font-size:14px;
            background:#069; border-radius:4px; font-weight:bold; text-decoration:blink;"> <?php echo $data['admin']; ?> </span>
        </td>
    </tr>
    <?php
		}
	?>
	<form action="admin_includes/event_manager/remove_event_setup.php"
    method="post" name="set_event" enctype="multipart/form-data">
    <input type="hidden" name="admin" value="<?php echo $_SESSION['user']; ?>" />
    <input type="hidden" name="dates" value="<?php echo date('Y-m-d');?>" />
    <tr>
    	<th>Event Status</th>
        <td>
        	<select name="event_status">
            	<option value="">Deactive</option>
            </select>
            <span style="color:#FFF; padding:7px 16px; margin:0px 10px;  font-size:14px;
            background:#F00; font-weight:bold; text-decoration:blink;"> &laquo; Will Deactive </span>
        </td>
    </tr>
    <tr>
    	<th>Tweet Status</th>
        <td>
        	<select name="tweet_status">
            	<option value="">Deactive</option>
            </select>
            <span style="color:#FFF; padding:7px 15px; margin:0px 10px;  font-size:14px;
            background:#3CF; font-weight:bold; text-decoration:blink;"> &laquo; Will Deactive </span>
        </td>
    </tr>
    <tr>
    	<th></th>
        <td>
        	<input type="submit" name="deactive_event" value="Deactive" onClick="return sure_deactive()"
            style="width:130px; height:35px; float:left; margin-left:90px;
            cursor:pointer; background:#069; border:none; color:#FFF; font-weight:bold;">
        </td>
    </tr>
    </form>
</table>