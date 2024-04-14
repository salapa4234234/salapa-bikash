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
    	<th>Question</th>
        <th>Status</th>
        <th>Feature</th>
        <th>Added Date</th>
        <th>Manage</th>
    </tr>
    <?php
		$result=$obj->select("select * from tbl_faq where del='1' order by id desc");
		$c=1;
		while($data=mysqli_fetch_assoc($result)){
			$id=$data['id'];
	?>
    <tr>
    	<td class="topmenu"><?php echo $c; ?></td>
        <td><?php echo $data['question'];?></td>
        <td>
			<form action="admin_includes/faq_manager/edit_faq_setup.php" method="post">
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
			<form action="admin_includes/faq_manager/edit_faq_setup.php" method="post">
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
        <td><?php echo $data['dates'];?></td>
        <td>
            <a href="loginsetup.php?topic=faq&task=edit&id=<?php echo $data['id']; ?>">
                <input type="button" title="Edit"  value="" style=" border:none; 
                background:url(them_img/edit.gif) no-repeat; 
                cursor:pointer; height:30px; width:30px;" />
            </a>
            <form action="admin_includes/faq_manager/delete_faq_setup.php" method="post" 
            style="display:inline;">
            	<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
            	<input type="hidden" name="link" value="<?php echo $data['link']; ?>">
                <input type="submit" name="delete_faq" onClick="return sure_delete()" 
                value="" title="delete" style="
                border:none; background:url(them_img/delete.gif) no-repeat; 
                cursor:pointer; height:30px; width:30px;">
            </form>
        </td>
    </tr>
    <?php
		$c++;
		}
	?>
    <tr>
    	<td colspan="9">
        	<a href="loginsetup.php?topic=faq_add" style="float:left;">
            	<h1 style="float:right; line-height:60px; margin-right:70px; color:#06C;">
                	Add New <img src="them_img/add-new.png" height="30" title="Add">
                </h1>
            </a>
        </td>
    </tr>
    <?php
	}
	elseif($task=="edit"){
		include('admin_includes/faq_manager/edit_faq.php');
	}
	elseif($task=="add"){
		include('admin_includes/faq_manager/add_faq.php');
	}
	?>
</table>