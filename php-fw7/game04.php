<?php
//game.php
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
		echo "NAME: ".$this->name."<br>";
	}
	function getHp(){
		echo "HP: ".$this->hp."<br>";
	}
	function getAttack(){
		echo "ATTACK: ".$this->attack."<br>";
	}
}
$hero=new Character("Raymond", 100, 80);
$hero->getName();
$hero->getHp();
$hero->getAttack();

?>