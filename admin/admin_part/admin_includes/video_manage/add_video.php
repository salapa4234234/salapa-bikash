<table cellpadding="0" cellspacing="0" width="100%" class="new_articles">
	<form action="admin_includes/video_manage/add_video_setup.php"
    method="post" name="new_video" enctype="multipart/form-data"  onSubmit="return(video_adds());">
    <input type="hidden" name="admin" value="<?php echo $_SESSION['user']; ?>" />
    <input type="hidden" name="dates" value="<?php echo date('Y-m-d');?>" />
	<tr>
    	<th>Video Category</th>
        <td>
        	<select name="types" id="types">
                <option value="">Select Video Type</option>
                <option value="conference">Conference</option>
                <option value="programandevent">Program And Event</option>
                <option value="projectvideo">Project Video</option>
                <option value="movietrailer"> Movie Trailer</option>
                <option value="comedy"> Comedy </option>
                <option value="serial"> Tele Serial</option>
                <option value="tvshows"> TV shows </option>
                <option value="interview"> Interview  </option>
                <option value="eventandcouncert"> Event and Councert  </option>
                <option value="nepalimovie"> Nepali Movie </option>
                <option value="hollywood"> Hollywood And Bollywood</option>
                <option value="filmysongs"> Filmy Songs</option>
                <option value="modernsongs"> Modern Songs</option>
                <option value="lokgeet"> Lok Geet</option>
                <option value="documentry"> Documentry</option>
            </select>
        </td>
    </tr>
    <tr>
    	<th>Video URL</th>
        <td><input type="text" name="url" id="url" style="width:50%"></td>
    </tr>
    <tr>
    	<th>Video Title</th>
        <td>
        	<input type="text" name="title" id="title" style="width:50%">
        </td>
    </tr>
    <tr>
    	<th>Status</th>
        <td>
        	<select name="status" id="status">
            	<option value="">Select Status</option>
                <option value="1">Active</option>
            	<option value="">Deactive</option>
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
    	<th></th>
        <td>
        	<input type="submit" name="video_add" value="Add Video" style="width:130px; float:left; 
            cursor:pointer; background:#069; border:none; color:#FFF; font-weight:bold;">
        </td>
    </tr>
    </form>
</table>