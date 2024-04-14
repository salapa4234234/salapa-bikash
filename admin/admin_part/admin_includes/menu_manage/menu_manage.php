<style>
	.topmenu, .submenu, .child{
		text-align:left !important;
		padding-left:5px;}
	.submenu{
		width:50px; padding-left:20px;}
	.child{
		width:40px; padding-left:40px;}
</style>
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
        <th>Feature</th>
        <th>Category</th>
        <th>Added Date</th>
        <th>Manage</th>
    </tr>
    <?php
		$result=$obj->select("select * from tbl_menu where menu!='' and del='1' order by position");
		$c=1;
		while($data=mysqli_fetch_assoc($result)){
			$id=$data['id'];
	?>
    <tr>
    	<td class="topmenu"><?php echo $c; ?></td>
        <td><?php echo $data['menu'];?></td>
        <td><?php echo $data['position'];?></td>
        <td>
			<form action="admin_includes/menu_manage/edit_menu_setup.php" method="post">
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
                border:none; cursor:pointer; background:url(them_img/passive.gif) no-repeat;"
                <?php
					}
				?>
                />
            </form>
        </td>
        <td>
			<form action="admin_includes/menu_manage/edit_menu_setup.php" method="post">
            	<input type="hidden" value="<?php echo $data['id']; ?>" name="id" />
                <input type="hidden" name="feature" value="<?php echo $data['feature']; ?>" />
                <input type="submit" value="" name="feature_change"  
				<?php 
					$feature=$data['feature'];
					if($feature==1){
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
        <td> Menu </td>
        <td><?php echo $data['dates'];?></td>
        <td>
            <a href="loginsetup.php?topic=menu&task=edit&id=<?php echo $data['id']; ?>">
                <input type="button" title="Edit"  value="" style=" border:none; 
                background:url(them_img/edit.gif) no-repeat; 
                cursor:pointer; height:30px; width:30px;" />
            </a>
            <form action="admin_includes/menu_manage/delete_menu_setup.php" method="post" 
            style="display:inline;">
            	<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
            	<input type="hidden" name="link" value="<?php echo $data['link']; ?>">
                <input type="submit" name="delete_menu" onClick="return sure_delete()" 
                value="" title="delete" style="
                border:none; background:url(them_img/delete.gif) no-repeat; 
                cursor:pointer; height:30px; width:30px;">
            </form>
        </td>
    </tr>
    <?php
		$results=$obj->select("select * from tbl_menu where parent='$id' and del='1' order by position");
		$c1=1;
		while($datas=mysqli_fetch_assoc($results)){
			$ids=$datas['id'];
	?>
    <tr style="background:#DDD;">
    	<td  class="submenu"><?php echo $c1; ?></td>
        <td><?php echo $datas['submenu'];?></td>
        <td><?php echo $datas['position'];?></td>
        <td>
			<form action="admin_includes/menu_manage/edit_menu_setup.php" method="post">
            	<input type="hidden" value="<?php echo $datas['id']; ?>" name="id" />
                <input type="hidden" name="status" value="<?php echo $datas['status']; ?>" />
                <input type="submit" value="" name="status_change"  
				<?php 
					$status=$datas['status'];
					if($status==1){
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
        <td>
			<form action="admin_includes/menu_manage/edit_menu_setup.php" method="post">
            	<input type="hidden" value="<?php echo $datas['id']; ?>" name="id" />
                <input type="hidden" name="feature" value="<?php echo $datas['feature']; ?>" />
                <input type="submit" value="" name="feature_change"  
				<?php 
					$feature=$datas['feature'];
					if($feature==1){
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
        <td>Submenu</td>
        <td><?php echo $datas['dates'];?></td>
        <td>
            <a href="loginsetup.php?topic=menu&task=edit&id=<?php echo $datas['id']; ?>">
                <input type="button" title="Edit"  value="" style=" border:none; 
                background:url(them_img/edit.gif) no-repeat; 
                cursor:pointer; height:30px; width:30px;" />
            </a>
            <form action="admin_includes/menu_manage/delete_menu_setup.php" method="post" 
            style="display:inline;">
            	<input type="hidden" name="id" value="<?php echo $datas['id']; ?>">
            	<input type="hidden" name="link" value="<?php echo $datas['link']; ?>">
                <input type="submit" name="delete_menu" onClick="return sure_delete()" 
                value="" title="delete" style="
                border:none; background:url(them_img/delete.gif) no-repeat; 
                cursor:pointer; height:30px; width:30px;">
            </form>
        </td>
    </tr>
	<?php
		$resultss=$obj->select("select * from tbl_menu where parent='$ids' and del='1' order by position");
		$c2=1;
		while($datass=mysqli_fetch_assoc($resultss)){
	?>
    <tr style="background:#EEE;">
    	<td class="child"><?php echo $c2; ?></td>
        <td><?php echo $datass['child'];?></td>
        <td><?php echo $datass['position'];?></td>
        <td>
			<form action="admin_includes/menu_manage/edit_menu_setup.php" method="post">
            	<input type="hidden" value="<?php echo $datass['id']; ?>" name="id" />
                <input type="hidden" name="status" value="<?php echo $datass['status']; ?>" />
                <input type="submit" value="" name="status_change"  
				<?php 
					$status=$datass['status'];
					if($status==1){
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
        <td>
			<form action="admin_includes/menu_manage/edit_menu_setup.php" method="post">
            	<input type="hidden" value="<?php echo $datass['id']; ?>" name="id" />
                <input type="hidden" name="feature" value="<?php echo $datass['feature']; ?>" />
                <input type="submit" value="" name="feature_change"  
				<?php 
					$feature=$datass['feature'];
					if($feature==1){
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
        <td>Child</td>
        <td><?php echo $datass['dates'];?></td>
        <td>
            <a href="loginsetup.php?topic=menu&task=edit&id=<?php echo $datass['id']; ?>">
                <input type="button" title="Edit"  value="" style=" border:none; 
                background:url(them_img/edit.gif) no-repeat; 
                cursor:pointer; height:30px; width:30px;" />
            </a>
            <form action="admin_includes/menu_manage/delete_menu_setup.php" method="post" 
            style="display:inline;">
            	<input type="hidden" name="id" value="<?php echo $datass['id']; ?>">
            	<input type="hidden" name="link" value="<?php echo $datass['link']; ?>">
                <input type="submit" name="delete_menu" onClick="return sure_delete()" 
                value="" title="delete" style="
                border:none; background:url(them_img/delete.gif) no-repeat; 
                cursor:pointer; height:30px; width:30px;">
            </form>
        </td>
    </tr>	
    <?php
		$c2++;
		}
		$c1++;
		}
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