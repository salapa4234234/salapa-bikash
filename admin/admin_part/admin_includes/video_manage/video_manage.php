<?php
	$resuts=$obj->select("select distinct types from tbl_video where del='1' order by id desc");
	while($datas=mysqli_fetch_assoc($resuts)){
	$types=$datas['types'];
?>
<table cellpadding="0" cellspacing="0" width="100%;">
	<tr>
    	<th style="line-height:25px; background:#CCC; text-align:left; color:#F30; padding-left:10px; font-size:14px;">
        	<?php echo $types; ?>
        </th>
    </tr>
</table>
<table cellpadding="0" cellspacing="0" width="100%;" class="article_manage">
	<tr>
    	<th>S.N</th>
        <th>Video</th>
        <th>Status</th>
        <th>Feature</th>
        <th>Adder</th>
        <th>Date</th>
        <th>Manage</th>
    </tr>
    <?php
		$result=$obj->select("select * from tbl_video where types='$types' and del='1' order by id desc");
		$row=mysqli_num_rows($result);
		$c=1;
		while($data=mysqli_fetch_assoc($result)){
	?>
    <tr>
    	<td><?php echo $c; ?></td>
    	<td>
        	 <iframe style="max-height:50px; max-width:120px;" class="img-responsive" 
             src="//www.youtube.com/embed/<?php echo $data['videos']; ?>?showinfo=0"
             frameborder="0" allowfullscreen></iframe>
        </td>
        <td style="width:20%;">
        	 <form action="admin_includes/video_manage/edit_setup.php" method="post">
                <input type="hidden" value="<?php echo $data['id']; ?>" name="id" />
                <input type="hidden" name="status" value="<?php echo $data['status']; ?>" />
                <input type="submit" value="" name="video_status_change"  
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
			 <form action="admin_includes/video_manage/edit_setup.php" method="post">
                <input type="hidden" value="<?php echo $data['id']; ?>" name="id" />
                <input type="hidden" name="feature" value="<?php echo $data['feature']; ?>" />
                <input type="submit" value="" name="video_feature_change"  
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
        <td style="width:20%;"><?php echo $data['admin'];?></td>
        <td style="width:20%;"><?php echo $data['dates'];?></td>
        <td>
        	<a href="loginsetup.php?topic=video_edit&edit=<?php echo $data['id']; ?>" title="edit">
            	<input type="button" value="" style="border:none; background:url(them_img/edit.gif) 
                no-repeat; cursor:pointer; height:30px; width:30px;" />
            </a>
            <form action="admin_includes/video_manage/delete_video_setup.php" method="post" style="display:inline;">
            	<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                <input type="submit" name="delete_video_one" onClick="return sure_delete()" value="" title="delete" style="
                border:none; background:url(them_img/delete.gif) no-repeat; cursor:pointer; height:30px; width:30px;">
            </form>
    	</td>
    </tr>
    <?php
		$c++;
		}
	?>
</table>
<?php
	}
?>