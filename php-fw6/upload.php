<?php
//upload.php
$tmpfile=$_FILES["fileField"]["tmp_name"];
$uploadfile="upload/".$_FILES["fileField"]["name"];

if (move_uploaded_file($tmpfile, $uploadfile)){
	echo "upload succeed";
}else{
	echo "cannot upload";
}
?>