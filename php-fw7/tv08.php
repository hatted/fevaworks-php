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
}
class LCD extends TV{
}

$sony=new TV(42, "black");
$sony->turnOn();
$sony->turnOff();
$sony->getPlug();
echo "this TV size is ".$sony->size."<br>";
echo "this TV color is ".$sony->color."<br>";

$philips=new TV(32, "black");
$philips->turnOn();
$philips->turnOff();
$philips->getPlug();
echo "this TV size is ".$philips->size."<br>";
echo "this TV color is ".$sony->color."<br>";

$samsung=new LCD();
$samsung->turnOn();
$samsung->turnOff();
$samsung->getPlug();
?>
