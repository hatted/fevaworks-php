<?php
//mark6NoRepeat2.php
$mark6=range(1,49);
shuffle($mark6);
for ($j=1; $j<7; $j++){
	$result[$j]=$mark6[$j];
}
sort($result);
print_r($result);
?>