<?php
	$id=$_GET['id'];
	$sqls="select * from tbl_product where id='$id'";
	$results=$obj->select($sqls);
	$datas=mysqli_fetch_assoc($results);
?>
<table cellpadding="0" cellspacing="0" width="100%" class="new_articles">
	<form action="admin_includes/productManager/editProductSetup.php"
    method="post" name="new_article" enctype="multipart/form-data">
    <input type="hidden" name="admin" value="<?php echo $_SESSION['user']; ?>" />
    <input type="hidden" name="dates" value="<?php echo date('Y-m-d');?>" />
    <input type="hidden" name="id" value="<?php echo $datas['id'];?>" />
    <input type="hidden" name="preimg" value="<?php echo $datas['image']; ?>" />
	<tr>
    	<th>*Product Name:</th>
        <td>
        <input type="text" name="productname" id="productname" 
        value="<?php echo $datas['productname']; ?>" placeholder=" Product Name?" required>
        </td>
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
                <option value="<?php echo $data['link']; ?>"
                	<?php if($datas['productcategory']==$data['link']) echo "selected"; ?>
                ><?php echo $data['menu']; ?></option>
                <?php
					}
				?>
                <?php
					$sql="select * from tbl_menu where menu='' and submenu!='' and
					status='1' and feature!='1' and del='1' order by position";
					$result=$obj->select($sql);
					while($data=mysqli_fetch_assoc($result)){
				?>
                <option value="<?php echo $data['link']; ?>"
                <?php if($datas['productcategory']==$data['link']) echo "selected"; ?>
                ><?php echo $data['submenu']; ?></option>
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
        	<option value="Rs." <?php if($datas['currency']=="Rs.") echo "selected"; ?>>Rs.</option>
            <option value="$." <?php if($datas['currency']=="$.") echo "selected"; ?>>$.</option>
        </select>
        <input type="number" name="productprice" id="productprice" 
        value="<?php echo $datas['productprice']; ?>" placeholder=" Product Price?" required
        style="width:auto; border-radius:0px; height:35px;">
        <select name="scale" required>
        	<option value="">Scale</option>
        	<option value="Per Piece" <?php if($datas['scale']=="Per Piece") echo "selected"; ?>>Per Piece</option>
        	<option value="Per KG." <?php if($datas['scale']=="Per KG.") echo "selected"; ?>>Per KG.</option>
        	<option value="Per Quintal" <?php if($datas['scale']=="Per Quintal") echo "selected"; ?>>Per Quintal</option>
        	<option value="Per Litter" <?php if($datas['scale']=="Per Litter") echo "selected"; ?>>Per Litter</option>
        	<option value="Per Meter" <?php if($datas['scale']=="Per Meter") echo "selected"; ?>>Per Meter</option>
        </select>
        </td>
    </tr>
    <tr>
    	<th>*Suply Ability: </th>
        <td><input type="text" name="suplyability" id="suplyability" value="<?php echo $datas['suplyability']; ?>" 
        placeholder=" Suply Ability?" required></td>
    </tr>
    <tr>
    	<th>*Payment Terms:</th>
        <td><input type="text" name="paymentterms" id="paymentterms"
        value="<?php echo $datas['paymentterms']; ?>" placeholder=" Payment Terms?" required></td>
    </tr>
    <tr>
    	<th>*Delivery Details:</th>
        <td><input type="text" name="deliverydetails" id="deliverydetails" 
        value="<?php echo $datas['deliverydetails']; ?>"placeholder=" Delivery Details?"></td>
    </tr>
    <tr>
    	<th>*Mobile:</th>
        <td><input type="text" name="mobile" id="mobile"
        value="<?php echo $datas['mobile']; ?>" placeholder=" mobile number?" required></td>
    </tr>
    <tr>
    	<th>Email:</th>
        <td>
        	<input type="email" name="email" value="<?php echo $datas['email']; ?>" placeholder=" Email?">
        </td>
    </tr>
    <tr>
    	<th>Website:</th>
        <td>
        	<input type="text" name="website" value="<?php echo $datas['website']; ?>" placeholder=" website?">
        </td>
    </tr>
    <tr>
    	<th>facebook page:</th>
        <td>
        	<input type="text" name="facebook" value="<?php echo $datas['facebook']; ?>" placeholder=" facebook page?">
        </td>
    </tr>
    <tr>
    	<th>Offer:</th>
        <td>
        	<input type="text" name="offer" value="<?php echo $datas['offer']; ?>" placeholder=" Offer?">
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
                <option value="<?php echo $i; ?>" <?php if($i==$datas['position']) echo "selected"; ?>>
				<?php echo $i; ?></option>
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
                <option value="1" <?php if($datas['feature']==1) echo "selected"; ?>>Publish</option>
            	<option value="" <?php if($datas['feature']!=1) echo "selected"; ?>>Unpublish</option>
            </select>
        </td>
    </tr>
    <tr>
    	<th>Feature</th>
        <td>
        	<select name="feature" id="feature">
            	<option value="">Select Feature</option>
            	<option value="" <?php if($datas['status']!=1) echo "selected"; ?>>No</option>
                <option value="1" <?php if($datas['status']==1) echo "selected"; ?>>Yes</option>
            </select>
        </td>
    </tr>
    <tr>
    	<th>*Image:</th>
        <td>
        	<?php
				$img=$datas['image'];
				if($img!=""){
			?>
					<img src="../../images/productImages/<?php echo $img;?>" height="80" style=" margin-right:10px;"/>
        			<h3 style="color:#F60;">Change Image?</h3>
        			<input type="file" name="image" id="image" >
			<?php
                }
				else{
			?>
            		<h4 style="color:#F60;">Add New Image? Only<span style="color:#0CF"> 
                    ( jpg, png and gif )</span> fromat will support!!!</h4>	
        			<input type="file" name="image" id="image">
            <?php
				}
			?>
        </td>
    </tr>
    <tr>
    	<th>Description:</th>
        <td>
        	<textarea name="content" class="ckeditor" id="ckimage"><?php echo $datas['description']; ?></textarea>
        </td>
    </tr>
    <tr>
    	<td colspan="2">
        	<input type="submit" name="producteditor" value="Update" style="width:130px; float:right; 
            cursor:pointer; background:#069; border:none; color:#FFF; font-weight:bold;">
        </td>
    </tr>
    </form>
</table>