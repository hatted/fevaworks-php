<?php
//mark6.php
for ($i=1; $i<=6; $i++){
	$mark6[$i]=rand(1,49);
}

sort($mark6);

for ($i=0; $i<=5; $i++) {
	echo "$mark6[$i] ";
}
?>
