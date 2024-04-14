<?php
	if(isset($_GET['edit'])){
		$id=$_GET['edit'];
	}
	else{
		$id="no";
	}
	$result=$obj->select("select * from tbl_video where id='$id'");
	$data=mysqli_fetch_assoc($result);
	$type=$data['types'];
?>
<table cellpadding="0" cellspacing="0" width="100%" class="new_articles">
	<form action="admin_includes/video_manage/edit_setup.php"
    method="post" name="new_video" enctype="multipart/form-data"  onSubmit="return(video_adds());">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <input type="hidden" name="admin" value="<?php echo $_SESSION['user']; ?>" />
    <input type="hidden" name="dates" value="<?php echo date('Y-m-d');?>" />
	<tr>
    	<th>Video Category</th>
        <td>
        	<select name="types" id="types">
                <option value="">Select Video Type</option>
                <option value="programandevent"
                	<?php
						$types=$data['types'];
						if($types=="cgsprogramandevent"){
							echo "selected='selected'";
						}
					?>
                > Program And Event</option>
                <option value="projectvideo"
                	<?php
						$types=$data['types'];
						if($types=="projectvideo"){
							echo "selected='selected'";
						}
					?>
                > Project Video</option>
                <option value="movietrailer"
                	<?php
						$types=$data['types'];
						if($types=="movietrailer"){
							echo "selected='selected'";
						}
					?>
                > Movie Trailer</option>
                <option value="comedy"
                	<?php
						$types=$data['types'];
						if($types=="comedy"){
							echo "selected='selected'";
						}
					?>
                > Comedy </option>
                <option value="serial"
                	<?php
						$types=$data['types'];
						if($types=="serial"){
							echo "selected='selected'";
						}
					?>
                > Tele Serial</option>
                <option value="tvshows"
                	<?php
						$types=$data['types'];
						if($types=="tvshows"){
							echo "selected='selected'";
						}
					?>
                > TV shows </option>
                <option value="interview"
                	<?php
						$types=$data['types'];
						if($types=="interview"){
							echo "selected='selected'";
						}
					?>
                > Interview  </option>
                <option value="eventandcouncert"
                	<?php
						$types=$data['types'];
						if($types=="eventandcouncert"){
							echo "selected='selected'";
						}
					?>
                > Event and Councert  </option>
                <option value="nepalimovie"
                	<?php
						$types=$data['types'];
						if($types=="nepalimovie"){
							echo "selected='selected'";
						}
					?>
                > Nepali Movie </option>
                <option value="hollywood"
                	<?php
						$types=$data['types'];
						if($types=="hollywood"){
							echo "selected='selected'";
						}
					?>
                > Hollywood And Bollywood</option>
                <option value="filmysongs"
                	<?php
						$types=$data['types'];
						if($types=="filmysongs"){
							echo "selected='selected'";
						}
					?>
                > Filmy Songs</option>
                <option value="modernsongs"
                	<?php
						$types=$data['types'];
						if($types=="modernsongs"){
							echo "selected='selected'";
						}
					?>
                > Modern Songs</option>
                <option value="lokgeet"
                	<?php
						$types=$data['types'];
						if($types=="lokgeet"){
							echo "selected='selected'";
						}
					?>
                > Lok Geet</option>
                <option value="documentry"
                	<?php
						$types=$data['types'];
						if($types=="documentry"){
							echo "selected='selected'";
						}
					?>
                > Documentry</option>
            </select>
        </td>
    </tr>
    <tr>
    	<th>Video URL</th>
        <td><input type="text" name="url" id="url" value="<?php echo $data['videos']; ?>" style="width:50%"></td>
    </tr>
    <tr>
    	<th>Video Title</th>
        <td>
        	<input type="text" name="title" value="<?php echo $data['title']; ?>" id="title" style="width:50%">
        </td>
    </tr>
    <tr>
    	<th>Status</th>
        <td>
        	<select name="status" id="status">
            	<option value="">Select Status</option>
                <option value="1"<?php
						$status=$data['status'];
						if($status==1){
							echo "selected='selected'";
						}
					?>
                >Active</option>
            	<option value=""
					<?php
						$status=$data['status'];
						if($status=="0"){
							echo "selected='selected'";
						}
					?>
                >Deactive</option>
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
						$feature=$data['feature'];
						if($feature=="0"){
							echo "selected='selected'";
						}
					?>
                >No</option>
                <option value="1"
					<?php
						$feature=$data['feature'];
						if($feature==1){
							echo "selected='selected'";
						}
					?>
                >Yes</option>
            </select>
        </td>
    </tr>
    <tr>
    	<th></th>
        <td>
        	<input type="submit" name="video_edit_all" value="Edit Video" style="width:130px; float:left; 
            cursor:pointer; background:#069; border:none; color:#FFF; font-weight:bold;">
        </td>
    </tr>
    </form>
</table>