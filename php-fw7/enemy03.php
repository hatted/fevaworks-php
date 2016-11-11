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
}

class Character{
	var $hp;
	var $atk;
	function __construct($hp, $atk){
		$this->hp=$hp;
		$this->atk=$atk;
	}
}

$raymond=new Character(100,100);

$pig=new Enemy(1,1,1,1);
$pig->alert();

$redpig=new Enemy(5,0,0,5);



?>