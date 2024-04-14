<?php
/**
 * Multiple file upload with progress bar php and jQuery
 * 
 * @author Resalat Haque
 * @link http://www.w3bees.com
 * 
 */

$max_size = 1024*2000; // 200kb
$extensions = array('jpeg', 'jpg', 'png','gif');
$dir = '../../../../images/multipleupload/';
$count = 0;
require_once'../../../../php/db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST' and isset($_FILES['files']))
{
	// loop all files
	$parentid=$_POST['parentid'];
	$parenttable=$_POST['parenttable'];
	foreach ( $_FILES['files']['name'] as $i => $name )
	{
		$sql="select * from tbl_image order by id desc";
		$result=$obj->select($sql);
		$data=mysqli_fetch_assoc($result);
		$id=$data['id']+1;
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
	    if( move_uploaded_file($_FILES["files"]["tmp_name"][$i], $dir .$id. $name) ){
	    	$count++;
			
			$sql="INSERT INTO `tbl_image`(`parentid`, `parenttable`, `image`) 
			VALUES ('".$parentid."','".$parenttable."','".$id.$name."')";
		// skip sql error
			if(!$obj->insert($sql))
			continue;
			
		}
	}
}

echo json_encode(array('count' => $count));
?>