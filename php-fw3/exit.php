<?php
//exit.php
if (date("N")>5) {
	echo "We are close";
	exit;
}
echo "We are open";
?>