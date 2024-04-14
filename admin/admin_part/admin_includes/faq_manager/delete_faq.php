<table cellpadding="0" cellspacing="0" width="100%;" class="article_manage">
	<form action="admin_includes/faq_manager/delete_faq_setup.php" method="post">
    <tr>
    	<th>select</th>
    	<th>Question</th>
        <th>Status</th>
        <th>Feature</th>
        <th>Added Date</th>
    </tr>
	<?php
		$result=$obj->select("select * from tbl_faq where del='1' order by id desc");
		$row=mysqli_num_rows($result);
		$c=1;
		while($data=mysqli_fetch_assoc($result)){
	?>
    <input type="hidden" name="row" value="<?php echo $row; ?>">
    <tr style="background:
    	<?php 
			if($c%2==0){
			echo "#FFF";}
			else{
			echo "#DDD";}
			?>"
    >
    	<td><input type="checkbox" name="checkbox[]" id="checkbox[]" value="<?php echo $data['id']; ?>"></td>
        <td>
		<?php 
			echo $data['question'];
			?></td>
        <td>
			<?php 
					$status=$data['status'];
					if($status==1){
				?>
                <img src="them_img/active.gif" >
                <?php
					}
					else{
				?>
                <img src="them_img/passive.gif" >
                <?php
					}
				?>
        </td>
        <td> 
				<?php 
					$feature=$data['feature'];
					if($feature==1){
				?>
                <img src="them_img/active.gif" >
                <?php
					}
					else{
				?>
                <img src="them_img/passive.gif" >
                <?php
					}
				?>
        </td>
        <td><?php echo $data['dates'];?></td>
    </tr>	
    <?php
		$c++;
		}
	?>
    <tr>
    	<td colspan="8">
        	<input type="submit" name="delete_multiple_faq" value="Delete Selected" onclick="return sure_delete()" style="width:130px;
        	text-align:center; height:23px; float:right; cursor:pointer; background:#069; border:none; color:#FFF; font-weight:bold;">
        </td>
    </tr>
    </form>
</table>