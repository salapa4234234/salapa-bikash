<?php
	if(!isset($_GET['task'])){
?>
<table cellpadding="0" cellspacing="0" width="100%;" class="article_manage">
	<tr>
    	<th>S.N</th>
    	<th>Name</th>
        <th>Subject</th>
        <th>Email</th>
        <th>Date</th>
        <th>Manage</th>
    </tr>
    <?php
		/* code for pagination */
		$result=$obj->select("select * from tbl_client
		order by id desc");
		
		$row_per_page = 20;
		$no_of_rows = mysqli_num_rows($result);
        
        $no_of_page = ceil($no_of_rows/$row_per_page);
        if(isset($_GET['page_no'])) {
        	$page_no = $_GET['page_no'];
        }
        else{
        	$page_no = 1;
        }
        $range = ($page_no - 1) * $row_per_page.','.$row_per_page;
		/* code for pagination  end*/
		$results=$obj->select("select * from tbl_client order by id desc limit $range");
		
		$c=1;
		while($data=mysqli_fetch_assoc($results)){
	?>
    <tr>
    	<td><?php echo $c; ?></td>
        <td><?php echo $data['name'] ?></td>
        <td><?php echo $data['subject'];?></td>
        <td><?php echo $data['email'];?></td>
        <td><?php echo $data['dates'];?></td>
        <td>
        	<a href="loginsetup.php?topic=clientmanager&task=view&id=<?php echo $data['id']; ?>">
            	<img src="them_img/view1.png" height="31" title="View">
            </a>
            <?php 
				if($data['file']!=""){
			?>
            <a href="../../includes/formtopdf/examples/<?php echo $data['file']; ?>" target="_blank">
            	<input type="button" title="Print" value="" style="height:30px; width:30px; 
                background:url(them_img/print.png) no-repeat; cursor:pointer; border:none;" />
            </a>
            <?php
				}
			?>
            <a href="#">
            <form action="admin_includes/clientmanager/delete_setup.php" method="post" style="display:inline;">
            	<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                <input type="submit" name="delete_form_single" onClick="return sure_delete()" value="" title="delete" style="
                border:none; background:url(them_img/delete.gif) no-repeat; cursor:pointer; width:30px; height:30px;">
            </form>
            </a>
        </td>
    </tr>
    <?php
		$c++;
		}
	?>
    <tr>
    	<style>
			.pagi a{
				color:#069;
				padding:2px 5px;
				font-size:14px;}
			.pagi a:hover, .pagi .acti{
				color:#F00;}
		</style>
    	<th colspan="9" class="pagi">
        	<!-- code for pagination -->
        	 <a href="loginsetup.php?topic=clientmanager"> [ First ] </a> 
			 <?php
			 	if(isset($_GET['page_no'])){
					$active_p_num=$_GET['page_no'];
				}
				else{ 
					$active_p_num=1;
				}
				if($page_no > 1 ) {
				?>
				<a href="loginsetup.php?topic=clientmanager&page_no=<?php echo $page_no - 1; ?>"> &laquo;&laquo; </a> 
				<?php 
				} 
				
				for($i=1; $i<=$no_of_page; $i++) { ?>
				<a href="loginsetup.php?topic=clientmanager&page_no=<?php echo $i ?>"
                	class="<?php
						if($i==$active_p_num){
							echo "acti";
							}
					?>"
                >
				
				<?php echo $i ?></a> <?php } ?>
				<?php 
				if($page_no<$no_of_page) { ?>
				<a href="loginsetup.php?topic=clientmanager&page_no=<?php echo $page_no+1; ?>"> &raquo;&raquo; </a>
				<?php 
					} 
				?>
                <a href="loginsetup.php?topic=clientmanager&page_no=<?php echo $i-1; ?>"> [ Last ] </a>
             <!-- code for pagination -->
        </th>
    </tr>
</table>
<?php
	}
	else{
		include('admin_includes/clientmanager/viewdetails.php');
	}
?>