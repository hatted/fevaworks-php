<?php
//tv.php
class TV{
	public $plug="UK";
	var $size;
	var $color;
	private $voltage=240;
	protected $repair=0;
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
	public static function insurance(){
		echo "insurance cover $1<br>";
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
	function setVoltage($new_voltage){
		$this->voltage=$new_voltage;
	}
	function setRepair(){
		$this->repair++;
	}
}

$sony=new TV(42, "black");
$sony->turnOn();
$sony->turnOff();
$sony->plug="CN";
$sony->getPlug();
$sony->getColor();
echo "this TV size is ".$sony->size."<br>";
//$sony->voltage=120;
$sony->getVoltage();
//$sony->repair++;
$sony->getRepair();
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

$samsung->getVoltage();
$samsung->setVoltage(120);
$samsung->getVoltage();
$samsung->getRepair();
$samsung->setRepair();
$samsung->getRepair();
echo "<br>";

echo "made in: ".TV::$madeIn;
TV::insurance();
?>
