<table cellpadding="0" cellspacing="0" width="100%" class="new_articles">
	<form action="admin_includes/article_manage/new_article_setup.php"
    method="post" name="new_article" enctype="multipart/form-data"  onSubmit="return(article_validate());">
    <input type="hidden" name="admin" value="<?php echo $_SESSION['user']; ?>" />
    <input type="hidden" name="dates" value="<?php echo date('Y-m-d');?>" />
	<tr>
    	<th>Title</th>
        <td><input type="text" name="mtitle" id="mtitle" placeholder="Enter Title"></td>
    </tr>
    <tr>
    	<th>Alias</th>
        <td><input type="text" name="title" id="title" placeholder="Enter Alias"></td>
    </tr>
    <tr>
    	<th>Fiscal Year</th>
        <td><input type="text" name="sources" id="sources" placeholder="ex. 2077/078"></td>
    </tr>
    <tr>
    	<th>Category</th>
        <td>
        	<select name="category" id="category">
                <option value="activities">Salapa Activities</option>   
                <option value="loaninterest">Loan Interest</option> 
                <option value="faq">FAQ</option>     
                <?php
					$result=$obj->select("select * from tbl_menu where status='1' 
					and del='1' order by id");
					while($data=mysqli_fetch_assoc($result)){
				?>
                	<?php
						if($data['menu']!="" and $data['submenu']=="" and $data['child']==""){
					?>
                		<option value="<?php echo $data['link']; ?>"> 
						<?php echo $data['menu']; ?></option>
                    <?php
						}
						else if($data['submenu']!="" and $data['menu']=="" and $data['child']==""){
					?>
                    	<option value="<?php echo $data['link']; ?>"> 
						<?php echo $data['submenu']; ?></option>
                    <?php
						}
						else{
					?>
                    	<option value="<?php echo $data['link']; ?>"> 
						<?php echo $data['child']; ?></option>
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
                <option value="1">Publish</option>
            	<option value="">Unpublish</option>
            </select>
        </td>
    </tr>
    <tr>
    	<th>Feature</th>
        <td>
        	<select name="feature" id="feature">
            	<option value="">Select Feature</option>
            	<option value="">No</option>
                <option value="1">Yes</option>
            </select>
        </td>
    </tr>
    <tr>
    	<th>File</th>
        <td>
        	<h5 style="color:#F60;">Add project file. only<span style="color:#0CF"> 
            ( pdf, doc, xls, xlsx and ppt )</span> fromat will support!!!
            </h5>
        	<input type="file" name="contentFile" id="contentFile" >
        </td>
    </tr>
    <tr>
    	<th>Image</th>
        <td>
        	<h4 style="color:#F60;">Add New Image? Only<span style="color:#0CF"> ( jpg, png and gif )</span> fromat will support!!!</h4>
        	<input type="file" name="image" id="image" >
        </td>
    </tr>
    <tr>
    	<th>Image Size</th>
        <td>
        	<h4 style="color:#F60;">Choose image size for home page</h4>
        	<select name="size" id="size">
            	<?php
					for($c=35;$c<=300;$c++){
				?>
            	<option value="<?php echo $c ?>"><?php echo $c; ?></option>
                <?php
					}
				?>
            </select>
        </td>
    </tr>
    <tr>
    	<th>Image Alignment</th>
        <td>
            <select name="alignment" id="alignment">
            	<option value="left">Left</option>
                <option value="right">Right</option>
            </select>
        </td>
    </tr>
    <tr>
    	<th>Display</th>
        <td>
        	<textarea name="display" class="ckeditor"></textarea>
        </td>
    </tr>
    <tr>
    	<th>Article</th>
        <td>
        	<textarea name="content" class="ckeditor" id="ckimage"></textarea>
        </td>
    </tr>
    <tr>
    	<th>Meta Keyword</th>
        <td>
        	<textarea name="metakeyword"></textarea></td>
        </td>
    </tr>
    <tr>
    	<th>Meta Data</th>
        <td>
        	<textarea name="metadata"></textarea>
        </td>
    </tr>
    <tr>
    	<th>Meta Description</th>
        <td>
        	<textarea name="metadescription"></textarea>
        </td>
    </tr>
    <tr>
    	<td colspan="2">
        	<input type="submit" name="article_add" value="Publish" style="width:130px; float:right; 
            cursor:pointer; background:#069; border:none; color:#FFF; font-weight:bold;">
        </td>
    </tr>
    </form>
</table>