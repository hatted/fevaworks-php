<?php
//tv.php
class TV{
	var $plug="UK";
	var $size;
	var $color;

	function __construct($new_size, $new_color){
		$this->size=$new_size;
		$this->color=$new_color;
	}
	function turnOn(){
		echo "turn on<br>";
	}
	function turnOff(){
		echo "turn on<br>";
	}
	function getPlug(){
		echo "this plug type is ".$this->plug."<br>";
	}
	function getColor(){
		echo "this color is ".$this->color."<br>";
	}
}
class LCD extends TV{
	function dolbyOn(){
		echo "dolby is on<br>";
	}
}

$sony=new TV(42, "black");
$sony->turnOn();
$sony->turnOff();
$sony->getPlug();
$sony->getColor();
echo "this TV size is ".$sony->size."<br>";
echo "<br>";

$philips=new TV(32, "black");
$philips->turnOn();
$philips->turnOff();
$philips->getPlug();
$philips->getColor();
echo "this TV size is ".$philips->size."<br>";
echo "<br>";

$samsung=new LCD(50, "white");
$samsung->turnOn();
$samsung->turnOff();
$samsung->getPlug();
$samsung->getColor();
$samsung->dolbyOn();
?>
