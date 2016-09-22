<?php
//mark6NoRepeat.php
for ($i=1; $i<=6; $i++){
	$mark6[$i]=rand(1,49);
	$j=1;
	while ($j<$i) {
		if ($mark6[$i]==$mark6[$j]) {
			$mark6[$i]=rand(1,49);
			$j=0;
		}
		$j++;
	}
}
// or another method
// $mark6=range(1,49);
// shuffle($mark6);

sort($mark6);

for ($i=0; $i<=5; $i++) {
	echo "<h1>$mark6[$i] </h1>";
}
?>
