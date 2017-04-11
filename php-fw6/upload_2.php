<?php
//upload.php
$tmpfile=$_FILES["fileField"]["tmp_name"];
$uploadfile="uploads/".$_FILES["fileField"]["name"];

$acceptable = array(
	'image/jpeg',
	'image/jpg'
);
if(!in_array($_FILES['fileField']['type'], $acceptable)) {
	die('Invalid file type.');
}

$maxsize    = 500000;
if($_FILES['fileField']['size'] >= $maxsize) {
	die('File too large.');
}


if (move_uploaded_file($tmpfile, $uploadfile)){
	echo "upload succeed";
}else{
	echo "cannot upload";
}
?>