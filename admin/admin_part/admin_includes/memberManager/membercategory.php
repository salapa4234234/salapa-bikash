<div class="gallery_type_one">
    	<h2>
            <span style="float:right;">
            	<a href="loginsetup.php?topic=membertype&task=delete">
                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                Delete
                </a>  &nbsp;
            </span>
            <span style="float:right;"> 
            	<a href="loginsetup.php?topic=membertype&task=add"> 
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> 
                &nbsp; Add |  &nbsp; 
                </a>
            </span>
            <span style="float:right;"> 
            	<a href="loginsetup.php?topic=membertype"> 
                &nbsp; Member Type |  &nbsp; 
                </a>
            </span>
        </h2>
    </div>
<?php
	if(!isset($_GET['task'])){
?>
<table cellpadding="0" cellspacing="0" width="100%" class="article_manage">
	<tr>
    	<th>S.N</th>
        <th>Category</th>
        <th>slug</th>
        <th>status</th>
        <th>Manage</th>
    </tr>
    <?php
		$result=$obj->select("Select * from tbl_membertype where status='1' ");
		$sn=1;
		while($data=mysqli_fetch_assoc($result))
		{
	?>
    <tr>
    	<td><?php echo $sn; ?></td>
        <td><?php echo $data['membertype']; ?></td>
        <td><?php echo $data['slug']; ?></td>
        <td><?php echo $data['status']; ?></td>
        <td>
        	<a href="loginsetup.php?topic=membertype&task=edit&id=<?php echo $data['id']; ?>" 
            style="float:left; padding-left:5px;">
            	<img src="them_img/edit.png" height="20" title="Edit"/>
            </a>
        	<form method="post" action="admin_includes/memberManager/membercategorysetup.php">
            	<input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
                <input type="submit" name="deleteMemberType" value="" title="Delete" onclick="return sure_delete()"
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
        	<a href="loginsetup.php?topic=membertype&task=add" style="float:left;">
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
		if($_GET['task']=="add"){
			include('admin_includes/memberManager/addmembertype.php');
		}
		else if($_GET['task']=="edit" && isset($_GET['id'])){
			include('admin_includes/memberManager/editmembertype.php');
		}
		else if($_GET['task']=="delete"){
			include('admin_includes/memberManager/deletemymbertype.php');
		}
	}
?>