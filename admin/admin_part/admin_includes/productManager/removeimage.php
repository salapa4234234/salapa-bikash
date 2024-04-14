<table style="width:100%; text-align:center; margin-top:10px;">
	<tr>
		<?php
            $id=$_GET['id'];
            $sql="select * from tbl_image where parenttable='tbl_product' and parentid='$id'";
            $result=$obj->select($sql);
            $count=1;
            while($data=mysqli_fetch_assoc($result)){
        ?>
                <td style="padding-top:10px;">
                    <img src="../../images/multipleupload/<?php echo $data['image']; ?>" style="height:200px;">
                    <form method="post" action="admin_includes/productManager/removeimagesetup.php" >
                    	<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                    	<input type="hidden" name="parentid" value="<?php echo $id ?>">
                    	<input type="hidden" name="topic" value="<?php echo $topic ?>">
                        <input type="hidden" name="image" value="<?php echo $data['image']; ?>">
                        <input type="submit" name="delete_image" value="delete" style="margin-top:10px; 
                        background:#900; color:#FFF; border:none; height:30px; width:100px;">
                    </form>
                </td>
        <?php
            if($count % 4==0){
                echo "</tr><tr>";
            }
            $count++;
            }
        ?>
    </tr>
</table>