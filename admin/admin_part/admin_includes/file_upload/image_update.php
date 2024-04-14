<?php
class img_update{
	function image_change($previous_image,$new_image_name,$new_image_temp,$path_for_save){
		$preimg=$previous_image;
		$image=$new_image_name;
		$image_temp=$new_image_temp;
		$path=$path_for_save;
		
		if($preimg!=""){
			unlink($path.$preimg);
		}
		$check=move_uploaded_file($image_temp,$path.$image);
		return $check;
    }
}
$obj_image_just_change=new img_update;
?>