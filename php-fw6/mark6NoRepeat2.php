<?php
//mark6NoRepeat2.php
$mark6=range(1,49);
/*
for ($i=0; $i<=49; $i++){
	$mark6[$i]=$i;
}
*/

shuffle($mark6);
for ($j=0; $j<=5; $j++){
	$result[$j]=$mark6[$j];
}

sort($result);
print_r($result);
?>
