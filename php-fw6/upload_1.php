<?php
//upload.php
$tmpfile=$_FILES["fileField"]["tmp_name"];
$uploadfile="uploads/".$_FILES["fileField"]["name"];

$acceptable = array(
	'image/jpeg',
	'image/jpg'
);
if(!in_array($_FILES['uploaded_file']['type'], $acceptable)) {
	die('Invalid file type.');
}


if (move_uploaded_file($tmpfile, $uploadfile)){
	echo "upload succeed";
}else{
	echo "cannot upload";
}
?>