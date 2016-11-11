<?php
//enemy.php
class Character{
	private $name;
	private $hp;
	public $attack;
	function __construct($name, $hp, $attack){
		$this->name=$name;
		$this->hp=$hp;
		$this->attack=$attack;
	}
	function getName(){
		echo "name: ".$this->name."<br>";
	}
	function getHp(){
		echo "hp: ".$this->hp."<br>";
	}
	function getAttack(){
		echo "attack: ".$this->attack."<br>";
	}
	function hit($hitpoint){
	  echo $this->name." old hp: ".$this->hp."<br>";
		$this->hp-=$hitpoint;
		echo $this->name." new hp: ".$this->hp."<br>";
		if ($this->hp<=0){
			echo $this->name." is dead.<br><br>";
		}
	}
}
class Enemy extends Character{
	function __construct($name, $hp, $attack){
		parent::__construct($name, $hp, $attack);
	}
	function alert(){
		echo "Enemy is coming<br><br>";
	}
	function fireAttack(){
		// echo "Your hp-". parent::$this->$attack*2 ."<br>";
		//   echo $this->name." old hp: ".$this->hp."<br>";
		$hitpoint=$this->attack*2;
		echo "fire attack: ".$hitpoint."<br>";
		  return $hitpoint;
			//parent::hit($hitpoint);
			// echo $this->name." new hp: ".$this->hp."<br>";
			// if ($this->hp<=0){
			// 	echo $this->name." is dead.<br><br>";
			// }
	}
}
class Dragon extends Enemy{
	function __constuct($hp, $attack){
		parent::__construct($hp, $attack);
	}
	function iceAttack(){
		echo "freezing...<br>";
		return $this->attack*3;
	}
}


$hero=new Character("raymond",100,100);
$hero->getName();
$hero->getHp();
$hero->getAttack();
echo "<br>";

$pig=new Enemy("pig",10,10);
$pig->getName();
$pig->getHp();
$pig->getAttack();
$pig->alert();
$hero->hit($pig->attack);
$pig->hit($hero->attack);
echo "<br>";

$cow=new Enemy("cow",20,20);
$cow->getName();
$cow->getHp();
$cow->getAttack();
$cow->alert();
$hero->hit($cow->fireAttack());
$cow->hit($hero->attack);
echo "<br>";

$reddragon=new Dragon("Dragon",50,50);
$reddragon->getName();
$reddragon->getHp();
$reddragon->getAttack();
$reddragon->alert();
$hero->hit($reddragon->iceAttack());
echo "<br>";

?>
