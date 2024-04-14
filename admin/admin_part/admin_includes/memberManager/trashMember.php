<table cellpadding="0" cellspacing="0" width="100%;" class="article_manage">
	<tr>
    	<th>S.N</th>
        <th>Select</th>
        <th>Image</th>
        <th>Name</th>
        <th>Position</th>
        <th>Address</th>
        <th>Contact</th>
    </tr>
	<form action="admin_includes/memberManager/deleteMemberSetup.php" method="post">
    <?php
		$result=$obj->select("Select * from tbl_member where del!='1'");
		$row=mysqli_num_rows($result);
		$c=1;
		while($data=mysqli_fetch_array($result)){
	?>
    <input type="hidden" name="row" value="<?php echo $row; ?>" >
    <tr>
    	<td><?php echo $c; ?></td>
    	<td><input type="checkbox" name="checkbox[]" id="checkbox[]" value="<?php echo $data['id']; ?>" style="width:100%;"></td>
        <td>
        	<?php
            	if($data['image']!=" "){
			?>
            	<img src="../../images/memberImages/<?php echo $data['image'] ?>" class="hoverImg">
            <?php
				}
				else{
			?>
            	<img src="../../them_img/admin.jpg" height="20" class="hoverImg" >
            <?php
					
				}			
			?>
        </td>
        <td><?php echo $data['memberName']; ?></td>
        <td><?php echo $data['position']; ?></td>
        <td><?php echo $data['address']; ?></td>
        <td> <?php echo $data['contact']; ?> </td>
    </tr>
    	<input type="hidden" name="memberImage[]" id="memberImage[]" value="<?php echo $data['image']; ?>"> 
    <?php
		$c++;
		}
	?>
    <tr>
    	<td colspan="10">
        	<input type="submit" name="deleteMemberPermanent" value="Delete parmanent" 
            onclick="return sure_delete_parmanent()" style="width:130px;
        	text-align:center; height:23px; float:right; cursor:pointer; background:#069; border:none; color:#FFF; font-weight:bold;">
            <input type="submit" name="recoverMemberMultiple" value="Restore" onclick="return sure_restore()" 
            style="width:130px; margin-right:20px;  text-align:center; height:23px; float:right; cursor:pointer; 
            background:#069; border:none; color:#FFF; font-weight:bold;">
        </td>
    </tr>
    </form>
</table>