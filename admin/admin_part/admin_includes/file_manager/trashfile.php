<table cellpadding="0" cellspacing="0" width="100%;" class="article_manage">
	<tr>
    	<th>S.N</th>
        <th>Select</th>
        <th>Title</th>
        <th>Publisher</th>
        <th>Date</th>
    </tr>
	<form action="admin_includes/file_manager/deletefilesetup.php" method="post">
    <input type="hidden" name="topic" value="<?php echo $topic; ?>">
    <?php
		if($topic=="trashdownload"){
			$result=$obj->select("Select * from tbl_file where category='adddownload' and del!='1' ");
		}
		else if($topic=="trashpublication"){
			$result=$obj->select("Select * from tbl_file where category='newpublication' and del!='1' ");
		}
		else if($topic=="trashinformation"){
			$result=$obj->select("Select * from tbl_file where category='newinformation' and del!='1' ");
		}
		else if($topic=="trashnewsandevent"){
			$result=$obj->select("Select * from tbl_file where category='newnewsandevent' and del!='1' ");
		}
		$row=mysqli_num_rows($result);
		$c=1;
		while($data=mysqli_fetch_array($result)){
	?>
    <input type="hidden" name="row" value="<?php echo $row; ?>" >
    <input type="hidden" name="prefile[]" id="prefile[]" value="<?php echo $data['name']; ?>">
    <tr>
    	<td><?php echo $c; ?></td>
    	<td><input type="checkbox" name="checkbox[]" id="checkbox[]" value="<?php echo $data['id']; ?>" style="width:100%;"></td>
        <td><?php echo $data['title']; ?></td>
        <td><?php echo $data['admin']; ?></td>
        <td><?php echo $data['date']; ?></td>
    </tr> 
    <?php
		$c++;
		}
	?>
    <tr>
    	<td colspan="10">
        	<input type="submit" name="deleteFilePermanent" value="Delete parmanent" 
            onclick="return sure_delete_parmanent()" style="width:130px;
        	text-align:center; height:23px; float:right; cursor:pointer; background:#069; border:none; color:#FFF; font-weight:bold;">
            <input type="submit" name="recoverFileMultiple" value="Restore" onclick="return sure_restore()" 
            style="width:130px; margin-right:20px;  text-align:center; height:23px; float:right; cursor:pointer; 
            background:#069; border:none; color:#FFF; font-weight:bold;">
        </td>
    </tr>
    </form>
</table>