<table cellpadding="0" cellspacing="0" width="100%" class="new_articles">
	<form action="admin_includes/event_manager/set_event_setup.php"
    method="post" name="set_event" enctype="multipart/form-data" onSubmit="return(event_set());">
    <input type="hidden" name="admin" value="<?php echo $_SESSION['user']; ?>" />
    <input type="hidden" name="dates" value="<?php echo date('Y-m-d');?>" />
	<tr>
    	<th>Event Name</th>
        <td>
        	<input type="text" name="event_name" placeholder="Enter Event Name?">
        </td>
    </tr>
    <tr>
    	<th>Event Status</th>
        <td>
        	<select name="event_status">
            	<option value="">Select Event Status</option>
            	<option value="">Deactive</option>
                <option value="1">Active</option>
            </select>
            <span style="color:#FFF; padding:7px 16px; margin:0px 10px;  font-size:14px;
            background:#F00; font-weight:bold; text-decoration:blink;"> &laquo; Active / Deactive? </span>
        </td>
    </tr>
    <tr>
    	<th>Tweet Status</th>
        <td>
        	<select name="tweet_status">
            	<option value="">Select Tweet Status</option>
            	<option value="">Deactive</option>
                <option value="1">Active</option>
            </select>
            <span style="color:#FFF; padding:7px 15px; margin:0px 10px;  font-size:14px;
            background:#3CF; font-weight:bold; text-decoration:blink;"> &laquo; Active / Deactive? </span>
        </td>
    </tr>
    <tr>
    	<th>Event English Date</th>
        <td>
            <select name="event_year">
            	<option value="">Year</option>
                <?php
					for($i=2015; $i<2050; $i++){
				?>
                <option value="<?php echo $i; ?>"><?php echo $i ;?></option>
                <?php
					}
				?>
            </select>
        	<select name="event_month">
            	<option value="">Month</option>
                <option value="1">January</option>
                <option value="2">February</option>
                <option value="3">March</option>
                <option value="4">April</option>
                <option value="5">May</option>
                <option value="6">June</option>
                <option value="7">July</option>
                <option value="8">August</option>
                <option value="9">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
            </select>
            <select name="event_day">
            	<option value="">Day</option>
            	<?php
					for($i=1;$i<33;$i++){
				?>
                <option value="<?php echo $i; ?>"><?php echo $i ;?></option>
                <?php
					}
				?>
            </select>
            <span style="color:#F60; font-size:15px; text-transform:uppercase;">
            	<span style="color:#FFF; padding:7px; margin:0px 10px; 
                background:#F00; font-weight:bold; text-decoration:blink;">Note &raquo; </span> only english date will support
            </span>
        </td>
    </tr>
    <tr>
    	<th>Set Greeting For Event</th>
        <td>
        	<input type="text" name="event_greeting" placeholder=" e.x happy Dipawali!">
        </td>
    </tr>
    <tr>
    	<th></th>
        <td>
        	<input type="submit" name="set_event" value="Set Event" style="width:130px; height:35px; float:left; 
            cursor:pointer; background:#069; border:none; color:#FFF; font-weight:bold;">
        </td>
    </tr>
    </form>
</table>