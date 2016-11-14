<?php
//form.php
echo $_POST['username'];



if (empty($_POST['username'])){
	echo "Please input your username";
}else{
	echo $_POST['username'];
}
?>