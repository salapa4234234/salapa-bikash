<?php
/**
 * Multiple file upload with progress bar php and jQuery
 * 
 * @author Resalat Haque
 * @link http://www.w3bees.com
 * 
 */

$max_size = 1347484420; // 200kb
$extensions = array('pdf','PDF', 'doc','DOC', 'ppt','PPT','xlx','XLX','docx','DOCX','pptx','PPTX','rar','RAR','zip','ZIP');
$dir = '../../../../files/multipleupload/';
$count = 0;
require_once'../../../../php/db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST' and isset($_FILES['files']))
{
	// loop all files
	$admin=$_POST['admin'];
	$date=date('d-M-Y');
	$parenttable=$_POST['parenttable'];
	foreach ( $_FILES['files']['name'] as $i => $name )
	{
		$title=$_POST['title'][$i];
		$prefare=$i."-".date('d-M-Y-h-m-s');
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
	    if( move_uploaded_file($_FILES["files"]["tmp_name"][$i], $dir.$prefare.$name) ){
	    	$count++;
			
			$sql="INSERT INTO `tbl_file`(`title`, `name`, `category`, `del`, `status`,`feature`, `admin`, `date`) 
			VALUES ('$title','".$prefare.$name."','$parenttable','1','1','','$admin','$date')";
		// skip sql error
			if(!$obj->insert($sql))
			continue;
			
		}
	}
}

echo json_encode(array('count' => $count));
?>