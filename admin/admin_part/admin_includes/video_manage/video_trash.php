<table cellpadding="0" cellspacing="0" width="100%;" class="article_manage">
	<tr>
    	<th>S.N</th>
        <th>Select</th>
    	<th>Video</th>
        <th>Status</th>
        <th>Feature</th>
        <th>Adder</th>
        <th>date</th>
    </tr>
	<form action="admin_includes/video_manage/delete_video_setup.php" method="post">
    <?php
		$result=$obj->select("Select * from tbl_video where del!='1'");
		$row=mysqli_num_rows($result);
		$c=1;
		while($data=mysqli_fetch_array($result)){
	?>
    <input type="hidden" name="row" value="<?php echo $row; ?>" >
    <tr>
    	<td><?php echo $c; ?></td>
    	<td><input type="checkbox" name="checkbox[]" id="checkbox[]" value="<?php echo $data['id']; ?>" style="width:100%;"></td>
        <td>
        	<iframe style="max-height:50px; max-width:120px;" class="img-responsive" 
             src="//www.youtube.com/embed/<?php echo $data['videos']; ?>?showinfo=0"
             frameborder="0" allowfullscreen></iframe>
        </td>
        <td>
        	<?php 
				$status=$data['status'];
				if($status==1){
			?>
            	<img src="them_img/active.gif"> 
			<?php
				}
				else{
			?>
            	<img src="them_img/passive.gif">
			<?php
				}
			?>
        </td>
        <td>
        	<?php 
				$feature=$data['feature'];
				if($feature==1){
			?>
            	<img src="them_img/active.gif"> 
			<?php
				}
				else{
			?>
            	<img src="them_img/passive.gif">
			<?php
				}
			?>
        </td>
        <td><?php echo $data['admin']; ?></td>
        <td><?php echo $data['dates']; ?></td>
    </tr> 
    <?php
		$c++;
		}
	?>
    <tr>
    	<td colspan="10">
        	<input type="submit" name="delete_video_permanent" value="Delete parmanent" 
            onclick="return sure_delete_parmanent()" style="width:130px;
        	text-align:center; height:23px; float:right; cursor:pointer; background:#069; border:none; color:#FFF; font-weight:bold;">
            <input type="submit" name="recover_video_multiple" value="Restore Trashed" onclick="return sure_restore()" 
            style="width:130px; margin-right:20px;  text-align:center; height:23px; float:right; cursor:pointer; 
            background:#069; border:none; color:#FFF; font-weight:bold;">
        </td>
    </tr>
    </form>
</table>