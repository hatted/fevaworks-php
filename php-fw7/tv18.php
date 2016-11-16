<?php
//tv.php
class TV{
	var $plug="UK";
	var $size;
	var $color;
	public static $madeIn="China";

	function __construct($new_size, $new_color){
		$this->size=$new_size;
		$this->color=$new_color;
	}
	function turnOn(){
		echo "turn on<br>";
	}
	function turnOff(){
		echo "turn off<br>";
	}
	function getPlug(){
		echo "this plug type is ".$this->plug."<br>";
	}
	function getColor(){
		echo "this color is ".$this->color."<br>";
	}
	function getVoltage(){
			echo $this->voltage."V<br>";
	}
	function getRepair(){
			echo "Repaired ".$this->repair." times<br>";
	}
}
class LCD extends TV{
	function dolbyOn(){
		echo "dolby is on<br>";
	}
	function dolbyOff(){
		echo "dolby is off<br>";
	}
	public function timeroff(){
		echo "in 30 min, ";
		parent::turnOff();
	}
}

$sony=new TV(42, "black");
$sony->turnOn();
$sony->turnOff();
$sony->getPlug();
$sony->getColor();
echo "this TV size is ".$sony->size."<br>";
echo "<br>";

$philips=new TV(32, "silver");
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
$samsung->dolbyOff();
$samsung->timeroff();
echo "this TV size is ".$samsung->size."<br>";
echo "<br>";

echo "made in: ".TV::$madeIn;

?>
