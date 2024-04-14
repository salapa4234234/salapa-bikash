<?php
	if(!isset($_GET['task'])){
?>
<table cellpadding="0" cellspacing="0" width="100%" class="article_manage">
	<tr>
    	<th>S.N</th>
        <th>Image</th>
        <th>Name</th>
        <th>Position</th>
        <th>Address</th>
        <th>Contact</th>
        <th>Manage</th>
    </tr>
    <?php
		$result=$obj->select("Select * from tbl_member where del='1' ");
		$sn=1;
		while($data=mysqli_fetch_assoc($result))
		{
	?>
    <tr>
    	<td><?php echo $sn; ?></td>
    	<td>
        	<?php
            	if($data['image']!=""){
			?>
            	<img src="../../images/memberImages/<?php echo $data['image'] ?>" class="hoverImg">
            <?php
				}
				else{
			?>
            	<img src="../../images/memberImages/member.gif" height="20" class="hoverImg" >
            <?php
					
				}			
			?>
        </td>
        <td><?php echo $data['memberName']; ?></td>
        <td><?php echo $data['position']; ?></td>
        <td><?php echo $data['address']; ?></td>
        <td>						
		    <?php echo $data['contact']; ?>
        </td>
        <td>
        	<a href="loginsetup.php?topic=member&task=edit&id=<?php echo $data['id']; ?>" 
            style="float:left; padding-left:5px;">
            	<img src="them_img/edit.png" height="20" title="Edit"/>
            </a>
        	<form method="post" action="admin_includes/memberManager/deleteMemberSetup.php">
            	<input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
                <input type="submit" name="deleteMember" value="" title="Delete" onclick="return sure_delete()"
                style="border:none; height:20px; width:20px; cursor:pointer; padding:3px 10px;
                background:url(them_img/delete12.gif) no-repeat"/>
            </form>
        </td>
    </tr>
    <?php
			$sn++;
		}
	?>
    
    <tr>
    	<td colspan="9">
        	<a href="loginsetup.php?topic=memberAdd" style="float:left;">
            	<h1 style="float:right; line-height:60px; margin-right:70px; color:#06C;">
                	Add New <img src="them_img/add-new.png" height="23" title="Add">
                </h1>
            </a>
        </td>
    </tr>
</table>

<?php
	}
	else{
		include('admin_includes/memberManager/editMember.php');
	}
?>