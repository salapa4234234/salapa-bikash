<?php
	if(!isset($_GET['task'])){
?>
<table cellpadding="0" cellspacing="0" width="100%" class="article_manage">
	<tr>
    	<th>S.N</th>
        <th>Title</th>
        <th>Category</th>
        <th>Publisher</th>
        <th>Date</th>
        <th>Manage</th>
    </tr>
    <?php
		if($topic=="downloadmanager"){
			$result=$obj->select("Select * from tbl_file where category='adddownload' and del='1' ");
		}
		else if($topic=="publicationmanager"){
			$result=$obj->select("Select * from tbl_file where category='newpublication' and del='1' ");
		}
		else if($topic=="informationmanager"){
			$result=$obj->select("Select * from tbl_file where category='newinformation' and del='1' ");
		}
		else if($topic=="newsandeventmanager"){
			$result=$obj->select("Select * from tbl_file where category='newnewsandevent' and del='1' ");
		}
		$sn=1;
		while($data=mysqli_fetch_assoc($result))
		{
	?>
    <tr>
    	<td><?php echo $sn; ?></td>
        <td style="text-align:left; max-width:250px;"><?php echo $data['title']; ?></td>
        <td><?php echo $data['category']; ?></td>
        <td><?php echo $data['admin']; ?></td>
        <td>						
		    <?php echo $data['date']; ?>
        </td>
        <td>
       	<?php
			if($topic=="downloadmanager"){
		?>
        	<a href="loginsetup.php?topic=downloadmanager&task=edit&id=<?php echo $data['id']; ?>" 
            style="float:left; padding-left:5px;">
            	<img src="them_img/edit.png" height="20" title="Edit"/>
            </a>
        <?php
			}
			else if($topic=="publicationmanager"){
		?>
        	<a href="loginsetup.php?topic=publicationmanager&task=edit&id=<?php echo $data['id']; ?>" 
            style="float:left; padding-left:5px;">
            	<img src="them_img/edit.png" height="20" title="Edit"/>
            </a>
        <?php
			}
			else if($topic=="informationmanager"){
		?>
        	<a href="loginsetup.php?topic=informationmanager&task=edit&id=<?php echo $data['id']; ?>" 
            style="float:left; padding-left:5px;">
            	<img src="them_img/edit.png" height="20" title="Edit"/>
            </a>
        <?php
			}
			else if($topic=="newsandeventmanager"){
		?>
        	<a href="loginsetup.php?topic=newsandeventmanager&task=edit&id=<?php echo $data['id']; ?>" 
            style="float:left; padding-left:5px;">
            	<img src="them_img/edit.png" height="20" title="Edit"/>
            </a>
        <?php
			}		?>
        	<form method="post" action="admin_includes/file_manager/deletefilesetup.php">
            	<input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
            	<input type="hidden" name="topic" value="<?php echo $topic; ?>" />
                <input type="submit" name="deletefile" value="" title="Delete" onclick="return sure_delete()"
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
        <?php
			if($topic=="downloadmanager"){
		?>
        	<a href="loginsetup.php?topic=adddownload" style="float:left;">
            	<h1 style="float:right; line-height:60px; margin-right:70px; color:#06C;">
                	Add New <img src="them_img/add-new.png" height="23" title="Add">
                </h1>
            </a>
        <?php
			}
			else if($topic=="publicationmanager"){
		?>
        	<a href="loginsetup.php?topic=newpublication" style="float:left;">
            	<h1 style="float:right; line-height:60px; margin-right:70px; color:#06C;">
                	Add New <img src="them_img/add-new.png" height="23" title="Add">
                </h1>
            </a>
        <?php
			}
			else if($topic=="informationmanager"){
		?>
        	<a href="loginsetup.php?topic=newinformation" style="float:left;">
            	<h1 style="float:right; line-height:60px; margin-right:70px; color:#06C;">
                	Add New <img src="them_img/add-new.png" height="23" title="Add">
                </h1>
            </a>
        <?php
			}
			else if($topic=="newsandeventmanager"){
		?>
        	<a href="loginsetup.php?topic=newnewsandevent" style="float:left;">
            	<h1 style="float:right; line-height:60px; margin-right:70px; color:#06C;">
                	Add New <img src="them_img/add-new.png" height="23" title="Add">
                </h1>
            </a>
        <?php
			}
			
		?>
        </td>
    </tr>
</table>

<?php
	}
	else{
		include('admin_includes/file_manager/editfile.php');
	}
?>