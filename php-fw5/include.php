<?php
//include.php
$file=array('a.inc', 'b.inc', 'c.inc');
for ($i=0; $i<count($file); $i++) {
	include($file[$i]);
}
?>