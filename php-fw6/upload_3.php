<?php
//upload.php
$tmpfile=$_FILES["fileField"]["tmp_name"];
$uploadfile="uploads/".$_FILES["fileField"]["name"];

// check file type
$acceptable = array(
	'image/jpeg',
	'image/jpg'
);
if(!in_array($_FILES['fileField']['type'], $acceptable)) {
	die('Invalid file type.');
}

// max file size
$maxsize    = 500000;
if($_FILES['fileField']['size'] >= $maxsize) {
	die('File too large.');
}

// min file size
$minsize    = 100000;
if($_FILES['fileField']['size'] <= $minsize) {
	die('File too small.');
}


if (move_uploaded_file($tmpfile, $uploadfile)){
	echo "upload succeed";
}else{
	echo "cannot upload";
}
?>