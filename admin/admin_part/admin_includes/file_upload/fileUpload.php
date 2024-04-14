<?php
class just_uploaded
		{
			function simple_upload($fileName,$temporaryFileName,$FilePathForSave)
				{
					$fileName=$fileName;
					$fileTemp=$temporaryFileName;
					$path=$FilePathForSave;
					$check=move_uploaded_file($fileTemp,$path.$fileName);
					return $check;
				}
		}
	$fileUploads=new just_uploaded;
?>