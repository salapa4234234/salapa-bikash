<?php
	$categorys=$_GET['category'];
	$filter_category=$_GET['filter_category'];
?>
<table cellpadding="0" cellspacing="0" width="100%;" class="article_manage">
	<tr>
    	<th>S.N</th>
    	<th>Title</th>
        <th>View</th>
        <th>Status</th>
        <th>Feature</th>
        <th>Publishre</th>
        <th>Manage</th>
    </tr>
    <?php
		/* code for pagination */
		$result=$obj->select("select * from tbl_content where category='$categorys' and del='1' order by id desc");
		
		$row_per_page = 8;
		$no_of_rows = mysqli_num_rows($result);
        
        $no_of_page = ceil($no_of_rows/$row_per_page);
        if(isset($_GET['page_no'])) {
        	$page_no = $_GET['page_no'];
        }
        else{
        	$page_no = 1;
        }
        $range = ($page_no - 1) * $row_per_page.','.$row_per_page;
		/* code for pagination */
		$results=$obj->select("select * from tbl_content where category='$categorys' and del='1' order by id desc limit $range");
		
		$c=1;
		while($data=mysqli_fetch_assoc($results)){
	?>
    <tr>
    	<td><?php echo $c; ?></td>
        <td><?php echo $data['mtitle'];?></td>
        <td><?php echo $data['viewer'];?></td>
        <td>
			<form action="admin_includes/article_manage/edit_article_setup.php" method="post">
            	<input type="hidden" value="<?php echo $data['id']; ?>" name="id" />
                <input type="hidden" name="filter_category" value="<?php echo $filter_category; ?>">
                <input type="hidden" name="category" value="<?php echo $categorys; ?>">
                <input type="hidden" name="status" value="<?php echo $data['status']; ?>" />
                <input type="submit" value="" name="status_change"  
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
			<form action="admin_includes/article_manage/edit_article_setup.php" method="post">
            	<input type="hidden" value="<?php echo $data['id']; ?>" name="id" />
                <input type="hidden" name="filter_category" value="<?php echo $filter_category; ?>">
                <input type="hidden" name="category" value="<?php echo $categorys; ?>">
                <input type="hidden" name="feature" value="<?php echo $data['display_order']; ?>" />
                <input type="submit" value="" name="feature_change" 
				<?php 
					$orders=$data['display_order'];
					if($orders==1){
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
        <td>
        	<a href="loginsetup.php?topic=articles&task=view&id=<?php echo $data['id']; ?>">
            	<img src="them_img/views.png" height="15" title="View">
            </a>
            <a href="loginsetup.php?topic=articles&task=edit&id=<?php echo $data['id']; ?>">
            	<input type="button" title="edit" value="" style="height:30px; width:30px; 
                background:url(them_img/edit.gif) no-repeat; cursor:pointer;" />
            </a>
            <a href="#">
            <form action="admin_includes/article_manage/delete_setup.php" method="post" style="display:inline;">
            	<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                <input type="hidden" name="filter_category" value="<?php echo $filter_category; ?>">
                <input type="hidden" name="category" value="<?php echo $categorys; ?>">
                <input type="submit" name="delete_article_single" onClick="return sure_delete()" value="" title="delete" style="
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
        	 <a href="loginsetup.php?category=<?php echo $categorys; ?>&filter_category=GO"> [ First ] </a> 
			 <?php
			 	if(isset($_GET['page_no'])){
					$active_p_num=$_GET['page_no'];
				}
				else $active_p_num=1;
				if($page_no > 1 ) {
				?>
				<a href="loginsetup.php?category=<?php echo $categorys ?>&filter_category=GO&page_no=<?php echo $page_no - 1; ?>">
                	 &laquo;&laquo; 
                 </a> 
				<?php 
				} 
				
				for($i=1; $i<=$no_of_page; $i++) { ?>
				<a href="loginsetup.php?category=<?php echo $categorys ?>&filter_category=GO&page_no=<?php echo $i ?>"
                	class="<?php
						if($i==$active_p_num){
							echo "acti";
							}
					?>"
                >
				
				<?php echo $i ?></a> <?php } ?>
				<?php 
				if($page_no<$no_of_page) { ?>
				<a href="loginsetup.php?category=<?php echo $categorys ?>&filter_category=GO&page_no=<?php echo $page_no+1; ?>"> 
               		&raquo;&raquo; 
                </a>
				<?php 
					} 
				?>
                <a href="loginsetup.php?category=<?php echo $categorys ?>&filter_category=GO&page_no=<?php echo $i-1; ?>"> [ Last ] </a>
             <!-- code for pagination -->
        </th>
    </tr>
    <tr>
    	<td colspan="9">
        	<a href="loginsetup.php?topic=new_article" style="float:left;">
            	<h1 style="float:right; line-height:60px; margin-right:70px; color:#06C;">
                	Add New <img src="them_img/add-new.png" height="23" title="Add">
                </h1>
            </a>
        </td>
    </tr>
</table>