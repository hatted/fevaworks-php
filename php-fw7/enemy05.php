<?php
//enemy.php
class Enemy{
	var $hp;
	var $sp;
	var $mp;
	var $atk;
	function __construct($hp, $sp, $mp, $atk){
		$this->hp=$hp;
		$this->sp=$sp;
		$this->mp=$mp;
		$this->atk=$atk;
	}
	function alert(){
		echo "Enemy is coming<br>";
	}
	function hit($hitpoint){
		$this->hp-=$hitpoint;
		echo "new hp: ".$this->hp."<br>";
	}
}

class Character{
	var $hp;
	var $atk;
	function __construct($hp, $atk){
		$this->hp=$hp;
		$this->atk=$atk;
	}
	function attack(){
		return rand(0, $this->atk);
	}
}

$raymond=new Character(100,100);
echo "attack: ".$raymond->attack()."<br>";

$pig=new Enemy(1,1,1,1);
$pig->alert();

$redpig=new Enemy(5,0,0,5);



?>