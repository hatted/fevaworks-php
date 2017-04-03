<?php
//sort.php
$prices=array(40, 20, 30, 10);
$prices[0]=40;
$prices[1]=20;
$prices[2]=30;
$prices[3]=10;
sort($prices);
for ($i=0; $i<sizeof($prices); $i++) {
	echo "$prices[$i]";
	echo "<br>";
}

$products=array("honda", "benz", "subaru", "BMW");
$products[0]="honda";
$products[1]="benz";
$products[2]="subaru";
$products[3]="BMW";
sort($products);
for ($i=0; $i<sizeof($products); $i++) {
	echo "$products[$i]";
	echo "<br>";
}
echo "---<br>";
?>




