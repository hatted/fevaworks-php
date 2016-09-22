<?php
//shuffle.php
$pictures=array("hp.jpg", "ibm.jpg", "sony.jpg");
shuffle($pictures);
echo "$pictures[0]<br>";
echo "<img src=$pictures[0]>";
?>