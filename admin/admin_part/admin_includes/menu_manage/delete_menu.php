<table cellpadding="0" cellspacing="0" width="100%;" class="article_manage">
	<form action="admin_includes/menu_manage/delete_menu_setup.php" method="post">
    <tr>
    	<th>select</th>
    	<th>Menu</th>
        <th>Position</th>
        <th>Status</th>
        <th>Feature</th>
        <th>Category</th>
        <th>Added Date</th>
    </tr>
	<?php
		$result=$obj->select("select * from tbl_menu where del='1' order by position");
		$row=mysqli_num_rows($result);
		$c=1;
		while($data=mysqli_fetch_assoc($result)){
	?>
    <input type="hidden" name="row" value="<?php echo $row; ?>">
    <tr style="background:
    	<?php 
			if($data['category']=="menu") 
			echo "#FFF";
			elseif($data['category']=="submenu") 
			echo "#CCC";
			if($data['category']=="child") 
			echo "#DDD";
			?>"
    >
    	<td><input type="checkbox" name="checkbox[]" id="checkbox[]" value="<?php echo $data['id']; ?>"></td>
        <td>
		<?php 
			if($data['category']=="menu") 
			echo $data['menu'];
			elseif($data['category']=="submenu") 
			echo $data['submenu'];
			if($data['category']=="child") 
			echo $data['child'];
			?></td>
        <td><?php echo $data['position'];?></td>
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
        <td> 
        	<?php 
			if($data['category']=="menu") 
			echo "Menu";
			elseif($data['category']=="submenu") 
			echo "Sub Menu";
			if($data['category']=="child") 
			echo "Child Menu";
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
        	<input type="submit" name="delete_multiple_menu" value="Delete Selected" onclick="return sure_delete()" style="width:130px;
        	text-align:center; height:23px; float:right; cursor:pointer; background:#069; border:none; color:#FFF; font-weight:bold;">
        </td>
    </tr>
    </form>
</table>