<?php
	if(isset($_GET['task']) && isset($_GET['id'])){
		$task=$_GET['task'];
		$id=$_GET['id'];
	}
	else{
		$task="no";
		$id="no";
	}
	if($task=="no" && $id=="no"){
?>
<table cellpadding="0" cellspacing="0" width="100%;" class="article_manage" style=" margin-top:5px;">
	<?php
		$re=$obj->select("select distinct type from tbl_add where del='1'");
		while($dat=mysqli_fetch_assoc($re)){
			$type=$dat['type'];
	?>
    <tr>
    	<th colspan="7" style="text-align:left; font-size:20px; background:#CCC; padding-left:5px; color:#5591af;">
        	<?php 
				if($type=="financialindicators"){
					echo "Financial Indicators";
				}
				else if($type=="quarterlyreport"){
					echo "Quarterly Report";
				}
				else if($type=="annualreport"){
					echo "Annual Report";
				}
				else if($type=="baselreport"){
					echo "Basel Report";
				}
				else if($type=="baserateandspreadrate"){
					echo "Base Rate & Spread Rate";
				}
			?>
        </th>
    </tr>
	<tr>
    	<th>S.N</th>
    	<th>Title</th>
        <th>Fiscal Year</th>
        <th>Status</th>
        <th>Publisher</th>
        <th>Publish Date</th>
        <th>Manage</th>
    </tr>
    <?php
		$result=$obj->select("select * from tbl_add where type='$type' and del='1' order by id desc");
		$c=1;
		while($data=mysqli_fetch_assoc($result)){
	?>
    <tr>
    	<td><?php echo $c; ?></td>
        <td><?php echo $data['client_name'];?></td>
        <td><?php echo $data['url'];?></td>
        <td>
			<form action="admin_includes/add_manage/edit_add_setup.php" method="post">
            	<input type="hidden" value="<?php echo $data['id']; ?>" name="id" />
                <input type="hidden" name="status" value="<?php echo $data['status']; ?>" />
                <input type="submit" value="" name="status_change"  
				<?php 
					$status=$data['status'];
					if($status==1){
				?>
                style="height:30px; width:30px; 
                border:none; cursor:pointer; background:url(them_img/active.gif) no-repeat;" 
                <?php
					}
					else{
				?>
                style="height:30px; width:30px; 
                border:none; cursor:pointer; background:url(them_img/delete.gif) no-repeat;"
                <?php
					}
				?>
                />
            </form>
        </td>
        <td><?php echo $data['admin'];?></td>
        <td><?php echo $data['dates']; ?></td>
        <td width="150">
        	<a href="loginsetup.php?topic=articles&task=view&id=<?php echo $data['id']; ?>">
            	<img src="them_img/views.png" height="15" title="View" style="height:30px; line-height:30px; float:left">
            </a>
            <a href="loginsetup.php?topic=advertise&task=edit&id=<?php echo $data['id']; ?>">
                <input type="button" value="" title="Edit"
                style="background:url(them_img/edit.gif) no-repeat; height:30px; width:30px; cursor:pointer;" />
            </a>
            <a href="#">
            <form action="admin_includes/add_manage/delete_setup.php" method="post" style="display:inline;">
            	<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                <input type="submit" name="delete_add_single" onClick="return sure_delete()" value="" title="delete" style="
                border:none; background:url(them_img/delete.gif) no-repeat; cursor:pointer; width:30px; height:30px;">
            </form>
            </a>
        </td>
    </tr>
    <?php
		$c++;
		}
	?>
	<?php
		}
	}
	elseif($task=="edit"){
		include('admin_includes/add_manage/edit_add.php');
	}
	?>
    
    <tr>
    	<td colspan="9">
        	<a href="loginsetup.php?topic=advertise_add" style="float:left;">
            	<h1 style="float:right; line-height:60px; margin-right:70px; color:#06C;">
                	Add New <img src="them_img/add-new.png" height="23" title="Add">
                </h1>
            </a>
        </td>
    </tr>
</table>