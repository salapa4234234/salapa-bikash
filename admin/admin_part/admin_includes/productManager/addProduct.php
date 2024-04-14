<table cellpadding="0" cellspacing="0" width="100%" class="new_articles">
	<form action="admin_includes/productManager/addProductSetup.php"
    method="post" name="new_article" enctype="multipart/form-data">
    <input type="hidden" name="admin" value="<?php echo $_SESSION['user']; ?>" />
    <input type="hidden" name="dates" value="<?php echo date('Y-m-d');?>" />
	<tr>
    	<th>*Product Name:</th>
        <td><input type="text" name="productname" id="productname" placeholder=" Product Name?" required></td>
    </tr>
	<tr>
    	<th>*Product Category:</th>
        <td>
        	<select name="productcategory" required>
            	<option value="">Select Product Category</option>
                <?php
					$sql="select * from tbl_menu where menu!='' and submenu='' and
					status='1' and feature!='1' and del='1' order by position";
					$result=$obj->select($sql);
					while($data=mysqli_fetch_assoc($result)){
				?>
                <option value="<?php echo $data['link']; ?>"><?php echo $data['menu']; ?></option>
                <?php
					}
				?>
                <?php
					$sql="select * from tbl_menu where menu='' and submenu!='' and
					status='1' and feature!='1' and del='1' order by position";
					$result=$obj->select($sql);
					while($data=mysqli_fetch_assoc($result)){
				?>
                <option value="<?php echo $data['link']; ?>"><?php echo $data['submenu']; ?></option>
                <?php
					}
				?>
            </select>
        </td>
    </tr>
	<tr>
    	<th>*Product Price:</th>
        <td>
        <select name="currency" required>
        	<option value="">Currency</option>
        	<option value="Rs.">Rs.</option>
            <option value="$.">$.</option>
        </select>
        <input type="number" name="productprice" id="productprice" placeholder=" Product Price?" 
        required style="width:auto; border-radius:0px; height:35px;">
        <select name="scale" required>
        	<option value="">Scale</option>
        	<option value="Per Piece">Per Piece</option>
        	<option value="Per KG.">Per KG.</option>
        	<option value="Per Quintal">Per Quintal</option>
        	<option value="Per Litter">Per Litter</option>
        	<option value="Per Meter">Per Meter</option>
        </select>
        </td>
    </tr>
    <tr>
    	<th>*Suply Ability: </th>
        <td><input type="text" name="suplyability" id="suplyability" placeholder=" Suply Ability?" required></td>
    </tr>
    <tr>
    	<th>*Payment Terms:</th>
        <td><input type="text" name="paymentterms" id="paymentterms" placeholder=" Payment Terms?" required></td>
    </tr>
    <tr>
    	<th>*Delivery Details:</th>
        <td><input type="text" name="deliverydetails" id="deliverydetails" placeholder=" Delivery Details?"></td>
    </tr>
    <tr>
    	<th>*Mobile:</th>
        <td><input type="text" name="mobile" id="mobile" placeholder=" mobile number?" required></td>
    </tr>
    <tr>
    	<th>Email:</th>
        <td>
        	<input type="email" name="email" placeholder=" Email?">
        </td>
    </tr>
    <tr>
    	<th>Website:</th>
        <td>
        	<input type="text" name="website" placeholder=" website?">
        </td>
    </tr>
    <tr>
    	<th>facebook page:</th>
        <td>
        	<input type="text" name="facebook" placeholder=" facebook page?">
        </td>
    </tr>
    <tr>
    	<th>Offer:</th>
        <td>
        	<input type="text" name="offer" placeholder=" Offer?">
        </td>
    </tr>
    <tr>
    	<th>Display Position:</th>
        <td>
        	<select name="position">
            	<option value="">Select position</option>
                <?php
					for($i=1; $i<=200; $i++){
				?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php
					}
				?>
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
    	<th>Feature</th>
        <td>
        	<select name="feature" id="feature">
            	<option value="">Select Feature</option>
            	<option value="">No</option>
                <option value="1">Yes</option>
            </select>
        </td>
    </tr>
    <tr>
    	<th>*Image:</th>
        <td>
        	<h4 style="color:#F60;">Add New Image? Only 
            <span style="color:#0CF"> ( jpg, png and gif )</span> 
            fromat will support!!!</h4>
        	<input type="file" name="image" id="image" required>
        </td>
    </tr>
    <tr>
    	<th>Description:</th>
        <td>
        	<textarea name="content" class="ckeditor" id="ckimage"></textarea>
        </td>
    </tr>
    <tr>
    	<td colspan="2">
        	<input type="submit" name="productadder" value="Publish" style="width:130px; float:right; 
            cursor:pointer; background:#069; border:none; color:#FFF; font-weight:bold;">
        </td>
    </tr>
    </form>
</table>