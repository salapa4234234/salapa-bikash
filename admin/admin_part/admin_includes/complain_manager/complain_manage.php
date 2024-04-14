<form name="contactform" method="post" action="admin_includes/complain_manager/complain_setup.php">
    <table cellpadding="0" cellspacing="0" width="100%" class="new_articles">
        <input type="hidden" name="admin" value="<?php echo $_SESSION['user']; ?>"/>
        <input type="hidden" name="dates" value="<?php echo date('Y-m-d');?>" />
        <tr>
            <th style="min-width:150px;">Complain Subject *</th>
            <td><input type="text" name="sub" id="sub"></td>
        </tr>
        <tr>
            <th style="min-width:150px;">Your Domain Name *</th>
            <td><input type="text" name="domain" id="domain"></td>
        </tr>
        <tr>
            <th>Your Contact Number *</th>
            <td><input type="text" name="contact" id="contact"></td>
        </tr>
        <tr>
            <th>Your Email Address *</th>
            <td>
                <input type="text" name="email" id="email">
            </td>
        </tr>
        <tr>
        	<th>Your Complain Message *</th>
            <td><textarea cols="94" rows="7" name="content"></textarea></td>
        </tr>
        <tr>
            <th> </th>
            <td>
                <input type="submit" name="complain_email" value="Complain Now" style="width:130px; float:left; 
                cursor:pointer; background:#069; border:none; color:#FFF; font-weight:bold;">
            </td>
        </tr>
    </table>
</form>