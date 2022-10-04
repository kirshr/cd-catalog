<?php 
function resize_image($file, $folder, $file_type, $new_width)
{
	list($width, $height) = getimagesize($file);
	$img_ratio = $width/$height;
	$new_height = $new_width/$img_ratio;


	$new_file = imagecreatetruecolor($new_width, $new_height);
	$source = imagecreatefromjpeg($file);
    //imagecreastefrompng
	
	
	imagecopyresampled($new_file, $source, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

	$new_fileName = $folder . basename($file);
	imagejpeg($new_file, $new_fileName, 80);
	
	imagedestroy($new_file);	
	imagedestroy($source);
}
?>
<?php 
function resize_image_webp($file, $folder, $file_type, $new_width)
{
	list($width, $height) = getimagesize($file);
	$img_ratio = $width/$height;
	$new_height = $new_width/$img_ratio;


	$new_file = imagecreatetruecolor($new_width, $new_height);
	$source = imagecreatefromwebp($file);
    //imagecreastefrompng
	
	
	imagecopyresampled($new_file, $source, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

	$new_fileName = $folder . basename($file);
	imagewebp($new_file, $new_fileName, 80);
	
	imagedestroy($new_file);	
	imagedestroy($source);
}
?>
<?php 
function resize_image_png($file, $folder, $file_type, $new_width)
{
	list($width, $height) = getimagesize($file);
	$img_ratio = $width/$height;
	$new_height = $new_width/$img_ratio;


	$new_file = imagecreatetruecolor($new_width, $new_height);
	$source = imagecreatefrompng($file);
    //imagecreastefrompng
	
	
	imagecopyresampled($new_file, $source, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

	$new_fileName = $folder . basename($file);
	imagepng($new_file, $new_fileName, 9);
	
	imagedestroy($new_file);	
	imagedestroy($source);
}
?>