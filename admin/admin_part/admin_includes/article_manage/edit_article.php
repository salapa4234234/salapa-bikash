<?php
	$result=$obj->select("select * from tbl_content where id='$id'");
	$data=mysqli_fetch_assoc($result);
	$id=$data['id'];
	$category=$data['category'];
	$status=$data['status'];
	$feature=$data['display_order'];
	$align=$data['alignment'];
	$prefile=$data['files'];
	$preimg=$data['image'];
	$decrase_size=$data['decrase_size'];
	$small_image=$data['small_image'];
?>
<table cellpadding="0" cellspacing="0" width="100%" class="new_articles">
	<form action="admin_includes/article_manage/edit_article_setup.php"
    method="post" name="new_article" enctype="multipart/form-data"  onSubmit="return(article_validate());">
    <input type="hidden" name="admin" value="<?php echo $_SESSION['user']; ?>" />
    <input type="hidden" name="dates" value="<?php echo date('Y-m-d');?>" />
    <input type="hidden" name="id" value="<?php echo $id; ?>" />
    <input type="hidden" name="prefil" value="<?php echo $prefile; ?>" />
    <input type="hidden" name="preimg" value="<?php echo $preimg; ?>" />
    <input type="hidden" name="decrase_size" value="<?php echo $decrase_size; ?>" />
    <input type="hidden" name="small_image" value="<?php echo $small_image; ?>" />
	<tr>
    	<th>Title</th>
        <td><input type="text" name="mtitle" id="mtitle" value="<?php echo $data['mtitle']; ?>"></td>
    </tr>
    <tr>
    	<th>Alias</th>
        <td><input type="text" name="title" id="title" value="<?php echo $data['title']; ?>" placeholder="add alias?"></td>
    </tr>
    <tr>
    	<th>Sources</th>
        <td><input type="text" name="sources" id="sources" value="<?php 
		echo $data['sources']; ?>" placeholder="ex. www.onlinekhabar.com"></td>
    </tr>
    <tr>
    	<th>Category</th>
        <td>
        	<select name="category" id="category">
            	<option value="">Select Category</option> 
                <option value="loaninterest" <?php if($category=="loaninterest") 
				{echo "selected";} ?>>Loan Interest</option> 
                <option value="faq" <?php if($category=="faq") 
				{echo "selected";} ?>>FAQ</option>                            
                 <?php
					$result=$obj->select("select * from tbl_menu where status='1' 
					and del='1' order by id");
					while($dat=mysqli_fetch_assoc($result)){
					$link=$dat['link'];
				?>
                	<?php
						if($dat['menu']!="" and $dat['submenu']=="" and $data['child']==""){
					?>
                		<option value="<?php echo $link; ?>"
							<?php
                            if($category==$link){
                                echo "selected='selected'";
                            }
                        ?>>
                        	<?php echo $dat['menu']; ?>
                        </option>
                    <?php
						}
						else if($dat['submenu']!="" and $dat['menu']=="" and $data['child']==""){
					?>
                    	<option value="<?php echo $link; ?>"
							<?php
                            if($category==$link){
                                echo "selected='selected'";
                            }
                        ?>>
                        	<?php echo $dat['submenu']; ?>
                        </option>
                    <?php
						}
						else{
					?>
                    	<option value="<?php echo $link; ?>"
							<?php
                            if($category==$link){
                                echo "selected='selected'";
                            }
                        ?>>
                        	<?php echo $dat['child']; ?>
                        </option>
                    <?php
						}
					?>
                <?php
					}
				?>
            </select>
        </td>
    </tr>
    <tr>
    	<th>Status</th>
        <td>
        	<select name="status" id="status">
            	<option value="">Select Status</option>
                <option value="1"
                	<?php
						if($status==1){
							echo "selected='selected'";
						}
					?>
                >Publish</option>
            	<option value=""
                <?php
						if($status==0){
							echo "selected='selected'";
						}
				?>
                >Unpublish</option>
            </select>
        </td>
    </tr>
    <tr>
    	<th>Feature</th>
        <td>
        	<select name="feature" id="feature">
            	<option value="">Select Feature</option>
            	<option value=""
                	<?php
						if($feature==0){
							echo "selected='selected'";
						}
					?>
                >No</option>
                <option value="1"
                	<?php
						if($feature==1){
							echo "selected='selected'";
						}
					?>
                >Yes</option>
            </select>
        </td>
    </tr>
    <tr>
    	<th>Content File</th>
        <td>
        	<?php
				$files=$data['files'];
				if($files!=""){
			?>
					<h4>Previous File - ( <?php echo $files; ?> )</h4>
        			<h3 style="color:#F60;">Change file?</h3>
        			<input type="file" name="contentFile" id="contentFile" >
			<?php
                }
				else{
			?>
            		<h4 style="color:#F60;">Add New File? Only<span style="color:#0CF"> 
                    ( pdf, doc, xls, xlsx ppt and pptx )</span> fromat will support!!!</h4>	
        			<input type="file" name="contentFile" id="contentFile" >
            <?php
				}
			?>
        </td>
    </tr>
    <tr>
    	<th>Image</th>
        <td>
        	<?php
				$img=$data['image'];
				if($img!=""){
			?>
					<img src="../../images/content_images/<?php echo $img;?>" height="80" style=" margin-right:10px;"/>
        			<h3 style="color:#F60;">Change Image?</h3>
        			<input type="file" name="image" id="image" >
			<?php
                }
				else{
			?>
            		<h4 style="color:#F60;">Add New Image? Only<span style="color:#0CF"> ( jpg, png and gif )</span> fromat will support!!!</h4>	
        			<input type="file" name="image" id="image" >
            <?php
				}
			?>
        </td>
    </tr>
    <tr>
    	<th>Image Size</th>
        
        <td>
        <?php
			if($img!=""){
		?>
        	<h4 style="color:#F60;">Increse/Decrase image size of home page</h4>
        	<select name="size">	
                <?php
					for($c=35;$c<=300;$c++){
				?>
            	<option value="<?php echo $c ?>"
                <?php
					if($data['decrase_size']==$c){
						echo"selected='selected'";
					}
				?>
                ><?php echo $c; ?></option>
                <?php
					}
				?>
            </select>
        <?php
			}
			else{
		?>
        	<h4 style="color:#F60;">Choose image size for home page</h4>
        	<select name="size">
                <?php
					for($c=35;$c<=300;$c++){
				?>
            	<option value="<?php echo $c ?>"><?php echo $c; ?></option>
                <?php
					}
				?>
            </select>
        <?php
			}
		?>
        </td>
    </tr>
    <tr>
    	<th>Image Alignment</th>
        <td>
            <select name="alignment" id="alignment">
            	<option value="left"
                	<?php
						if($align=="left"){
							echo "selected='selected'";
						}
					?>
                >Left</option>
                <option value="right"
                	<?php
						if($align=="right"){
							echo "selected='selected'";
						}
					?>
                >Right</option>
            </select>
        </td>
    </tr>
    <tr>
    	<th>Display</th>
        <td>
        	<textarea name="display" class="ckeditor"  ><?php echo $data['display']; ?></textarea>
        </td>
    </tr>
    <tr>
    	<th>Article</th>
        <td>
        	<textarea name="content" class="ckeditor"  id="ckimage" ><?php echo $data['content']; ?></textarea>
        </td>
    </tr>
    <tr>
    	<th>Meta Keyword</th>
        <td>
        	<textarea name="metakeyword"><?php echo $data['metakeyword']; ?></textarea></td>
        </td>
    </tr>
    <tr>
    	<th>Meta Data</th>
        <td>
        	<textarea name="metadata"><?php echo $data['metadata']; ?></textarea>
        </td>
    </tr>
    <tr>
    	<th>Meta Description</th>
        <td>
        	<textarea name="metadescription"><?php echo $data['metadescription']; ?></textarea>
        </td>
    </tr>
    <tr>
        <td colspan="2">
        	<input type="submit" name="article_edit_" value="change" style="width:130px; float:right; 
            cursor:pointer; background:#069; border:none; color:#FFF; font-weight:bold;">
        </td>
    </tr>
    </form>
</table>