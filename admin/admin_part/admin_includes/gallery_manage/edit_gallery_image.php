<?php
	if(isset($_GET['edit'])){
		$edit=$_GET['edit'];
	}
	else{
		$edit="no";
	}
?>
<?php
	if($edit=="no"){
		
		$results=$obj->select("select distinct gallery_name,id from tbl_gallery_category where del='1'");
		while($datas=mysqli_fetch_assoc($results)){
			$gallery=$datas['gallery_name'];
			$id=$datas['id'];
?>
            <table cellpadding="0" cellspacing="0" width="100%;">
                <tr>
                    <th style="line-height:25px; background:#CCC; text-align:left; color:#F30; padding-left:10px; font-size:14px;">
                        <?php echo $gallery; ?>
                    </th>
                </tr>
            </table>
            <table cellpadding="0" cellspacing="0" width="100%;" class="article_manage">
                <tr>
                    <th>S.N</th>
                    <th style="width:30%;">Image</th>
                    <th>Status</th>
                    <th>Feature</th>
                    <th style="width:30%;">Adder</th>
                    <th>Date</th>
                </tr>
                <?php
                    $result=$obj->select("select * from tbl_gallery where del='1' and parent='$id' order by id desc");
                    $c=1;
                    while($data=mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <td><?php echo $c; ?></td>
                    <td>
                        <img src="../../images/gallery_images/<?php echo $data['image'];?>" height="50">
                    </td>
                    <td>
                        <form action="admin_includes/gallery_manage/edit_setup.php" method="post">
                            <input type="hidden" value="<?php echo $data['id']; ?>" name="id" />
                            <input type="hidden" name="status" value="<?php echo $data['status']; ?>" />
                            <input type="submit" value="" name="status_change_gallery_image"  
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
                        <form action="admin_includes/gallery_manage/edit_setup.php" method="post">
                            <input type="hidden" value="<?php echo $data['id']; ?>" name="id" />
                            <input type="hidden" name="feature" value="<?php echo $data['feature']; ?>" />
                            <input type="submit" value="" name="feature_change_gallery_image"  
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
                    <td><?php echo $data['admin'];?></td>
                    <td><?php echo $data['dates'];?></td>
                </tr>
                <?php
                    $c++;
					}
                ?>
            </table>
<?php
		}
	}
else{
	$results=$obj->select("select parent from tbl_gallery where id='$edit' and del='1'");
	$datas=mysqli_fetch_assoc($results);
	$parent=$datas['parent'];
	$re=$obj->select("select gallery_name from tbl_gallery_category where id='$parent' and del='1'");
	$da=mysqli_fetch_assoc($re);
?>
            <table cellpadding="0" cellspacing="0" width="100%;">
                <tr>
                    <th style="line-height:25px; background:#CCC; text-align:left; color:#F30; padding-left:10px; font-size:14px;">
                        <?php echo $da['gallery_name']; ?>
                    </th>
                </tr>
            </table>
            <table cellpadding="0" cellspacing="0" width="100%;" class="article_manage">
                <tr>
                    <th>S.N</th>
                    <th style="width:30%;">Image</th>
                    <th>Status</th>
                    <th>Feature</th>
                    <th style="width:30%;">Adder</th>
                    <th>Date</th>
                </tr>
                <?php
                    $result=$obj->select("select * from tbl_gallery where del='1' and id='$edit' order by id desc");
                    $data=mysqli_fetch_assoc($result);
                ?>
                <tr>
                    <td>1</td>
                    <td>
                        <img src="../../images/gallery_images/<?php echo $data['image'];?>" height="50">
                    </td>
                    <td>
                        <form action="admin_includes/gallery_manage/edit_setup.php" method="post">
                            <input type="hidden" value="<?php echo $data['id']; ?>" name="id" />
                            <input type="hidden" name="status" value="<?php echo $data['status']; ?>" />
                            <input type="submit" value="" name="status_change_gallery_image_single"  
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
                        <form action="admin_includes/gallery_manage/edit_setup.php" method="post">
                            <input type="hidden" value="<?php echo $data['id']; ?>" name="id" />
                            <input type="hidden" name="feature" value="<?php echo $data['feature']; ?>" />
                            <input type="submit" value="" name="feature_change_gallery_image_single"  
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
                    <td><?php echo $data['admin'];?></td>
                    <td><?php echo $data['dates'];?></td>
                </tr>
            </table>
<?php
	
}
?>