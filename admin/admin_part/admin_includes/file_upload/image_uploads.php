<?php
	class image_upload
		{
			function upload($image_name,$image_temp_name,$image_path_for_save,$image_decrase_size)
				{
					$image=$image_name; /*image name */
					$temp_name=$image_temp_name; /*temparary image name */
					$path=$image_path_for_save; /*image save path */
					$size=$image_decrase_size; /* image size for decrase */
					
					$small_image="small_".$image;
					$img_ext=explode('.',$image);
					$ext=$img_ext['1'];
					
					$check=move_uploaded_file($temp_name,$path.$image);
					if($check){
						$image=$path.$image;
						$image_size=getimagesize($image);
						$image_width=$image_size[0];
						$image_height=$image_size[1];
						$new_size=($image_width+$image_height)/($image_width*($image_height/$size));
						$new_width=$image_width*$new_size;
						$new_height=$image_height*$new_size;
						$new_image=imagecreatetruecolor($new_width,$new_height);
						$old_image="";
						if($ext=="gif" || $ext=="GIF"){
							$old_image=imagecreatefromgif($image);
							imagecopyresized($new_image, $old_image,0,0,0,0,$new_width,$new_height,$image_width,$image_height);
							imagegif($new_image,$small_image);
							rename($small_image,$path.$small_image);
							return true;
						}
						elseif($ext=="png" || $ext=="PNG"){
							$old_image=imagecreatefrompng($image);
							imagecopyresized($new_image, $old_image,0,0,0,0,$new_width,$new_height,$image_width,$image_height);
							imagegif($new_image,$small_image);
							rename($small_image,$path.$small_image);
							return true;
						}
						elseif($ext=="jpg" || $ext=="JPG" || $ext=="jpeg"||$ext=="JPEG"){
							$old_image=imagecreatefromjpeg($image);
							imagecopyresized($new_image, $old_image,0,0,0,0,$new_width,$new_height,$image_width,$image_height);
							imagegif($new_image,$small_image);
							rename($small_image,$path.$small_image);
							return true;
						}
						else{
							return false;
						}
					}
					else{
						return false;
					}
				}
		}
	class image_decrase
		{
			function decrase($image_name,$image_path_for_save,$image_decrase_size,$previous_small_image_name)
				{
					$image=$image_name; /*image name */
					$path=$image_path_for_save; /*image save path */
					$size=$image_decrase_size; /* image size for decrase */
					
					$small_image=$previous_small_image_name;
					$img_ext=explode('.',$image);
					$ext=$img_ext['1'];
					
					$image=$path.$image;
					$image_size=getimagesize($image);
					$image_width=$image_size[0];
					$image_height=$image_size[1];
					$new_size=($image_width+$image_height)/($image_width*($image_height/$size));
					$new_width=$image_width*$new_size;
					$new_height=$image_height*$new_size;
					$new_image=imagecreatetruecolor($new_width,$new_height);
					$old_image="";
					if($ext=="gif" || $ext=="GIF"){
						$old_image=imagecreatefromgif($image);
						imagecopyresized($new_image, $old_image,0,0,0,0,$new_width,$new_height,$image_width,$image_height);
						imagegif($new_image,$small_image);
						rename($small_image,$path.$small_image);
						return true;
					}
					elseif($ext=="png" || $ext=="PNG"){
						$old_image=imagecreatefrompng($image);
						imagecopyresized($new_image, $old_image,0,0,0,0,$new_width,$new_height,$image_width,$image_height);
						imagegif($new_image,$small_image);
						rename($small_image,$path.$small_image);
						return true;
					}
					elseif($ext=="jpg" || $ext=="JPG" || $ext=="jpeg"||$ext=="JPEG"){
						$old_image=imagecreatefromjpeg($image);
						imagecopyresized($new_image, $old_image,0,0,0,0,$new_width,$new_height,$image_width,$image_height);
						imagegif($new_image,$small_image);
						rename($small_image,$path.$small_image);
						return true;
					}
					else{
						return false;
					}
				}
		}
		class just_upload
		{
			function simple_upload($image_name,$temporary_image_name,$image_path_for_save)
				{
					$image_name=$image_name;
					$image_temp=$temporary_image_name;
					$path=$image_path_for_save;
					$check=move_uploaded_file($image_temp,$path.$image_name);
					return $check;
				}
		}
	$obj_image_upload=new image_upload;
	$obj_image_decrase=new image_decrase;
	$obj_just_upload=new just_upload;
	
?>