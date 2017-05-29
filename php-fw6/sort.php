<?php
//sort.php
$prices=array(40, 20, 30, 10);
sort($prices);
for ($i=0; $i<sizeof($prices); $i++) {
	echo "$prices[$i]";
	echo "<br>";
}
echo "---<br>";

$products=array("honda", "benz", "subaru", "BMW");
sort($products);
for ($i=0; $i<sizeof($products); $i++) {
	echo "$products[$i]";
	echo "<br>";
}
?>




