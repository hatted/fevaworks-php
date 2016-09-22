<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mark 6 result</title>
<style type="text/css">
<!--
.style1 {
	font-family: "Courier New", Courier, monospace;
	font-weight: bold;
	font-size: 18px;
	color: #33CC99;
}
-->
</style>
</head>

<body>
<p><img src="hkjc_03.gif" width="146" height="61" /></p>
<p><span class="style1"><?php
//mark6.php
for ($i=1; $i<=6; $i++){
	$mark6[$i]=rand(1,49);
}

sort($mark6);

for ($i=0; $i<=5; $i++) {
	echo "$mark6[$i] ";
}
?>
</span></p>
<p>&nbsp; </p>
</body>
</html>
