<?php
//upload.php
$tmpfile=$_FILES["filename"]["tmp_name"];
$uploadfile="uploads/".$_FILES["filename"]["name"];

if (move_uploaded_file($tmpfile, $uploadfile)){
	echo "upload succeed";
}else{
	echo "cannot upload";
}
?>