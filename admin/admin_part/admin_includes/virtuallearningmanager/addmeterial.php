
<table cellpadding="0" cellspacing="0" width="100%" class="new_articles">
	<form action="admin_includes/virtuallearningmanager/addmeterialsetup.php"
    method="post" name="new_gallery" enctype="multipart/form-data">
    <input type="hidden" name="admin" value="<?php echo $_SESSION['user']; ?>">
    <input type="hidden" name="classid" value="<?php echo $_GET['class']; ?>">
    <input type="hidden" name="subjectid" value="<?php echo $_GET['subject'];?>">
    <input type="hidden" name="unitid" value="<?php echo $_GET['unit']; ?>">
	<tr>
    	<th>Title</th>
        <td><input type="text" name="title" id="title" required></td>
    </tr>
    <tr>
    	<th>Category</th>
        <td>
        	<select name="category" id="category" required onChange="return youtubeid();">
            	<option value="">Select Category</option>
                <option value="Video">Video</option>
                <option value="Audio">Audio</option>
                <option value="File">File</option>
            </select>
        </td>
    </tr>
    <script>
		function youtubeid(){
			var e = document.getElementById("category");
			var strUser = e.options[e.selectedIndex].value;
			if(strUser=="Video"){
				document.getElementById('youtube').style.display="block";
			}
			else{
				document.getElementById("youtube").style.display = "none";
			}
		}
	</script>
    <tr>
    	<th>File</th>
        <td>
        	<input type="file" name="files">
        	<span id="youtube"  style="display:none;">Youtube ID:<input type="text" name="youtube" placeholder="URL"></span>
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
    	<th></th>
        <td>
        	<input type="submit" name="add_meterial" value="Add Meterial" style="width:130px; float:left; 
            cursor:pointer; background:#069; border:none; color:#FFF; font-weight:bold;">
        </td>
    </tr>
    </form>
</table>