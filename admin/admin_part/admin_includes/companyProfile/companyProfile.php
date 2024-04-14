<?php
	$result=$obj->select("select * from tbl_companyprofile where id=1");
	$data=mysqli_fetch_assoc($result);
?>
<table cellpadding="0" cellspacing="0" width="100%" class="new_articles">
	<form name="newItem" method="post" action="admin_includes/companyProfile/companyProfileSetup.php" enctype="multipart/form-data" onsubmit="">
    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
    <input type="hidden" name="preLogo" value="<?php echo $data['companyLogo']; ?>">
	<tr>
    	<th>Company name:- </th>
        <td><input type="text" name="companyName" id="companyName" 
        value="<?php echo $data['companyName']; ?>" placeholder="Company Name?"></td>
    </tr>
    <tr>
    	<th>Company address:- </th>
        <td><input type="text" name="companyAddress" id="companyAddress" 
        value="<?php echo $data['companyAddress']; ?>" placeholder="Company Address?"></td>
    </tr>
    <tr>
    	<th>Website title:- </th>
        <td><input type="text" name="websiteTitle" id="websiteTitle" 
        value="<?php echo $data['websiteTitle']; ?>" placeholder="Company Name?"></td>
    </tr>
    <tr>
    	<th>Company URL:- </th>
        <td><input type="text" name="companyURL" id="companyURL" 
        value="<?php echo $data['companyURL']; ?>" placeholder="Company URL?"></td>
    </tr>
	<tr>
    	<th>Company logo:- </th>
        <td><input type="file" name="companyLogo" value="<?php echo $data['companyLogo']; ?>" id="companyLogo"></td>
    </tr>
    <tr>
    	<th>Phone number:- </th>
        <td><input type="text" name="phoneNumber" value="<?php echo $data['phoneNumber']; ?>" placeholder="Company phone number?"></td>
    </tr>
    <tr>
    	<th>Mobile Number:- </th>
        <td><input type="text" name="mobileNumber" value="<?php echo $data['mobileNumber']; ?>" placeholder="Company mobile number?"></td>
    </tr>
    <tr>
    	<th>Gmail:-</th>
        <td><input type="text" name="email1" value="<?php echo $data['email1']; ?>" placeholder="Company E-mail address?"></td>
    </tr>
    <tr>
    	<th>Yahoo:-</th>
        <td><input type="text" name="email2" value="<?php echo $data['email2']; ?>" placeholder="Company E-mail address?"></td>
    </tr>
    <tr>
    	<th>Others Email:-</th>
        <td><input type="text" name="email3" value="<?php echo $data['email3']; ?>" placeholder="Company E-mail address?"></td>
    </tr>
    <tr>
    	<th>Skyep:-</th>
        <td><input type="text" name="skyep" value="<?php echo $data['skyep']; ?>" placeholder="Skyep username?"></td>
    </tr>
    <tr>
    	<th>Facebook Page:- </th>
        <td><input type="text" name="facebookPage" value="<?php echo $data['facebookPage']; ?>" placeholder="Enter facebook page address?"></td>
    </tr>
    <tr>
    	<th>Google Map:- </th>
        <td><textarea name="companyMap"><?php echo $data['companyMap']; ?></textarea></td>
    </tr>
    <tr>
    	<th>Twitter Follow:- </th>
        <td><textarea name="twitterFollow"><?php echo $data['twitterFollow']; ?></textarea></td>
    </tr>
    <tr>
    	<th>Google+:-</th>
        <td><textarea name="googlePlus"><?php echo $data['googlePlus']; ?></textarea></td>
    </tr>
    <tr>
    	<th>Youtube Video:-</th>
        <td><textarea name="youtubeVideo"><?php echo $data['youtubeVideo']; ?></textarea></td>
    </tr>
    <tr>
    	<th>Meta Keyword:-</th>
        <td><textarea name="metaKeyword"><?php echo $data['metaKeyword']; ?></textarea></td>
    </tr>
    <tr>
    	<th>Meta Data:-</th>
        <td><textarea name="metaData"><?php echo $data['metaData']; ?></textarea></td>
    </tr>
    <tr>
    	<th>Meta Content:-</th>
        <td><textarea name="metaContent"><?php echo $data['metaContent']; ?></textarea></td>
    </tr>
    <tr>
    	<th>Copy Right:- </th>
        <td><textarea name="copyRight"><?php echo $data['copyRight']; ?></textarea></td>
    </tr>
    <tr>
    	<th>About Us:- </th>
        <td><textarea name="poweredBy"><?php echo $data['poweredBy']; ?></textarea></td>
    </tr>
    <tr>
    	<th></th>
        <td>
            <input type="submit" value="Update Company Profile" name="updateCompanyProfile" style="width:auto; padding:0px 20px; cursor:pointer;
            background:#099; border:none; color:#FFF; font-weight:bold;">
        </td>
    </tr>
    </form>
</table>