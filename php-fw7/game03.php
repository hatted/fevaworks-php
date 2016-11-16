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
}
$hero=new Character("Raymond", 100, 80);
?>