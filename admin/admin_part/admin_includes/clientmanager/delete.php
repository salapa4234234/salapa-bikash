<table cellpadding="0" cellspacing="0" width="100%;" class="article_manage">
	<tr>
    	<th>Select</th>
    	<th>Name</th>
        <th>Subject</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Date</th>
    </tr>
    <form action="admin_includes/clientmanager/delete_setup.php" method="post">
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
		$row=mysqli_num_rows($results);
		while($data=mysqli_fetch_assoc($results)){
	?>
    <input type="hidden" name="row" value="<?php echo $row; ?>">
    <tr>
    	<td><input type="checkbox" name="checkbox[]" id="checkbox[]" value="<?php echo $data['id']; ?>"></td>
        <td><?php echo $data['name'] ?></td>
        <td><?php echo $data['subject'];?></td>
        <td><?php echo $data['email'];?></td>
        <td><?php echo $data['contact'];?></td>
        <td><?php echo $data['dates'];?></td>
        
    </tr>
    <?php
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
        	 <a href="loginsetup.php?topic=deleteclient"> [ First ] </a> 
			 <?php
			 	if(isset($_GET['page_no'])){
					$active_p_num=$_GET['page_no'];
				}
				else{ 
					$active_p_num=1;
				}
				if($page_no > 1 ) {
				?>
				<a href="loginsetup.php?topic=deleteclient&page_no=<?php echo $page_no - 1; ?>"> &laquo;&laquo; </a> 
				<?php 
				} 
				
				for($i=1; $i<=$no_of_page; $i++) { ?>
				<a href="loginsetup.php?topic=deleteclient&page_no=<?php echo $i ?>"
                	class="<?php
						if($i==$active_p_num){
							echo "acti";
							}
					?>"
                >
				
				<?php echo $i ?></a> <?php } ?>
				<?php 
				if($page_no<$no_of_page) { ?>
				<a href="loginsetup.php?topic=deleteclient&page_no=<?php echo $page_no+1; ?>"> &raquo;&raquo; </a>
				<?php 
					} 
				?>
                <a href="loginsetup.php?topic=deleteclient&page_no=<?php echo $i-1; ?>"> [ Last ] </a>
             <!-- code for pagination -->
        </th>
    </tr>
    <tr>
    	<td colspan="10">
        	<input type="submit" name="delete_multiple_client" value="Delete Selected Item" 
            onclick="return sure_delete()" style="width:180px;
        	text-align:center; height:23px; float:right; cursor:pointer; background:#069; 
            border:none; color:#FFF; font-weight:bold;">
        </td>
    </tr>
    </form>
</table>
