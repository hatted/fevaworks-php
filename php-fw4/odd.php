<?php
//odd.php
$answer=$_POST['number']%2;
if ($answer==1){
	echo "it is odd number";
} else {
	echo "it is even number";
}
?>