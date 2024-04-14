<?php
	if(isset($_GET['task'])){
		if(isset($_GET['id'])){
			$id=$_GET['id'];
		}
		else{	
			$id="no";
		}
		$task=$_GET['task'];
	}
	else{
		$task="no";
	}
	if($task=="no"){
?>
<table cellpadding="0" cellspacing="0" width="100%;" class="article_manage">
	<tr>
    	<th>S.N</th>
    	<th>Menu</th>
        <th>Position</th>
        <th>Status</th>
        <th>Adder</th>
        <th>Added Date</th>
        <th>Manage</th>
    </tr>
    <?php
		$result=$obj->select("select * from tbl_menu where menu!='' and submenu='' and del='1' order by position");
		$c=1;
		while($data=mysqli_fetch_assoc($result)){
	?>
    <tr>
    	<td><?php echo $c; ?></td>
        <td><?php echo $data['menu'];?></td>
        <td><?php echo $data['position'];?></td>
        <td>
			<form action="admin_includes/menu_manage/edit_menu_setup.php" method="post">
            	<input type="hidden" value="<?php echo $data['id']; ?>" name="id" />
                <input type="hidden" name="status" value="<?php echo $data['status']; ?>" />
                <input type="submit" value="" name="status_change"  
				<?php 
					$status=$data['status'];
					if($status=="1"){
				?>
                style="height:30px; width:30px; 
                border:none; cursor:pointer; background:url(them_img/active.gif) no-repeat;" 
                <?php
					}
					else{
				?>
                style="height:30px; width:30px; 
                border:none; cursor:pointer; background:url(them_img/passive.gif) no-repeat;"
                <?php
					}
				?>
                />
            </form>
        </td>
        <td><?php echo $data['admin'];?></td>
        <td><?php echo $data['dates'];?></td>
        <td>
            <a href="loginsetup.php?topic=menu&task=edit&id=<?php echo $data['id']; ?>">
                <input type="button" title="Edit"  value="" style=" border:none; background:url(them_img/edit.gif) no-repeat; 
                cursor:pointer; height:30px; width:30px;" />
            </a>
            <form action="admin_includes/menu_manage/delete_menu_setup.php" method="post" style="display:inline;">
            	<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                <input type="submit" name="delete_menu" onClick="return sure_delete()" value="" title="delete" style="
                border:none; background:url(them_img/delete.gif) no-repeat; cursor:pointer; height:30px; width:30px;">
            </form>
        </td>
    </tr>
    <?php
		$c++;
		}
	?>
    <tr>
    	<td colspan="9">
        	<a href="loginsetup.php?topic=menu_add" style="float:left;">
            	<h1 style="float:right; line-height:60px; margin-right:70px; color:#06C;">
                	Add New <img src="them_img/add-new.png" height="30" title="Add">
                </h1>
            </a>
        </td>
    </tr>
    <?php
	}
	elseif($task=="edit"){
		include('admin_includes/menu_manage/edit_menu.php');
	}
	elseif($task=="add"){
		include('admin_includes/menu_manage/add_menu.php');
	}
	?>
</table>