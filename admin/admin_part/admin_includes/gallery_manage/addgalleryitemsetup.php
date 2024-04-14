<?php
/**
 * Multiple file upload with progress bar php and jQuery
 * 
 * @author Resalat Haque
 * @link http://www.w3bees.com
 * 
 */

$max_size = 1347484420; // 200kb
global $extensions;
$dir = '../../../../images/gallery_images/';
$count = 0;
require_once'../../../../php/db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST' and isset($_FILES['files']))
{
	// loop all files
	$parentid=$_POST['parentid'];
	$category=$_POST['category'];
	if($category=="Image Gallery"){
		$extensions = array('jpg','JPG', 'jpeg','JPEG', 'png','PNG','gif','GIF','bmp','BMP');
	}
	else if($category=="Video Gallery"){
		$extensions = array('mp4','MP4','wmv','WMV','mng','MNG','avi','AVI');
	}
	else if($category=="Audio Gallery"){
		$extensions = array('mp3','MP3','wma','WMA','wav','WAV','m4a','M4A');
	}
	$admin=$_POST['admin'];
	$date=date('d-M-y');
	foreach ( $_FILES['files']['name'] as $i => $name )
	{
		$title=$_POST['title'][$i];
		$prefare=$i."-".date('d-M-y-h-m-s');
		// if file not uploaded then skip it
		if ( !is_uploaded_file($_FILES['files']['tmp_name'][$i]) )
			continue;

	    // skip large files
		if ( $_FILES['files']['size'][$i] >= $max_size )
			continue;

		// skip unprotected files
		if( !in_array(pathinfo($name, PATHINFO_EXTENSION), $extensions) )
			continue;

		// now we can move uploaded files
	    if( move_uploaded_file($_FILES["files"]["tmp_name"][$i], $dir .$prefare. $name) ){
	    	$count++;
			$sql="INSERT INTO `tbl_gallery`(`parent`, `image`, `title`, `status`, `del`, `admin`, `dates`)
			VALUES ('$parentid','".$prefare.$name."','$title','1','1','$admin','$date')";
		// skip sql error
			if(!$obj->insert($sql))
			continue;
			
		}
	}
}

echo json_encode(array('count' => $count));
?>