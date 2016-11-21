<?php
//tv.php
class TV{
	var $plug="UK";
	var $name;
	var $size;
	var $color;

	function __construct($new_name,$new_size, $new_color){
		$this->name=$new_name;
		$this->size=$new_size;
		$this->color=$new_color;
	}
	function getName(){
		echo "this TV name is ".$this->name."<br>";
	}
	function turnOn(){
		echo "turn on<br>";
	}
	function turnOff(){
		echo "turn off<br>";
	}
	function volumeUp(){
		echo "volume up<br>";
	}
	function volumeDown(){
		echo "volume down<br>";
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
	function dolbyOff(){
		echo "dolby is off<br>";
	}
	function timerOff(){
		echo "in 30 min, it will ";
		parent::turnOff();
	}
}


$sony=new TV("Sony",42, "black");
$sony->getName();
$sony->turnOn();
$sony->turnOff();
$sony->volumeUp();
$sony->volumeDown();
$sony->getPlug();
$sony->getColor();
echo "this TV size is ".$sony->size."<br>";
echo "<br>";

$philips=new TV("Philips",32, "silver");
$philips->getName();
$philips->turnOn();
$philips->turnOff();
$philips->volumeUp();
$philips->volumeDown();
$philips->getPlug();
$philips->getColor();
echo "this TV size is ".$philips->size."<br>";
echo "<br>";

$samsung=new LCD("Samsung",50, "white");
$samsung->getName();
$samsung->turnOn();
$samsung->turnOff();
$samsung->volumeUp();
$samsung->volumeDown();
$samsung->getPlug();
$samsung->getColor();
$samsung->dolbyOn();
$samsung->dolbyOff();
$samsung->timerOff();
echo "this TV size is ".$samsung->size."<br>";
echo "<br>";
?>
