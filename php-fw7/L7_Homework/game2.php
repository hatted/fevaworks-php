
<?php
//game.php
$pictures=array("hero.png", "pig.png", "wolf.png", "dragon.png", "pig_hit_hero.png", "hero_hit_pig.png", "wolf_hit_hero.png", "hero_hit_wolf.png", "dragon_hit_hero.png", "hero_hit_dragon.png");
class Character{
	private $name;
	private $hp;
	public $attack;
	private $picture;
	
	function __construct($name,$hp,$attack,$picture){
		$this->name=$name;
		$this->hp=$hp;
		$this->attack=$attack;
		$this->picture=$picture;
	}
			
	function getName(){
		echo "NAME: ".$this->name."<br>";
	}
	
	function getHp(){
		echo "HP: ".$this->hp."<br>";
	}
	
	function getattack(){
		echo "ATTACK: ".$this->attack."<br>";
	}
	
	function getPicture(){
		echo "".$this->picture."<br>";
	}
	
	function hit($hit){
		echo $this->name." OLD HP: ".$this->hp."<br>";
		$this->hp-=$hit;
		echo $this->name." NEW HP: ".$this->hp."<br>";
		if ($this->hp<=0){
			echo $this->name." is dead. XO<br><br>";
		}
	}
}


class Enemy extends Character{
	function alert(){
		echo "Enemy is coming<br><br>";
	}
	function fireAttack(){
		$hit=$this->attack*2;
		echo "FIRE ATTACK: ".$hit."<br>";
		return $hit;
	}
}

class Boss extends Enemy{
	function iceAlert(){
		echo "Enemy is coming<br><br>";
	}
	function iceAttack(){
		$hit=$this->attack*3;
		echo "ICE ATTACK: ".$hit."<br>";
		return $hit;
	}
}


$hero=new Character("Patrick", 100, 80,"<img src=$pictures[0]>");
$hero->getName();
$hero->getHp();
$hero->getAttack();
$hero->getPicture();
echo "<br>";

$pig=new Enemy("Pig", 10, 9, "<img src=$pictures[1]>");
$pig->getName();
$pig->getHp();
$pig->getAttack();
$pig->getPicture();
$pig->alert();

echo "<br><img src=$pictures[4]><br>";
$hero->hit($pig->attack);
echo "<br><img src=$pictures[5]><br>";
$pig->hit($hero->attack);


$wolf=new Enemy("Wolf", 20, 18, "<img src=$pictures[2]>");
$wolf->getName();
$wolf->getHp();
$wolf->getAttack();
$wolf->getPicture();
$wolf->alert();

echo "<br><img src=$pictures[6]><br>";
$hero->hit($wolf->fireAttack());
echo "<br><img src=$pictures[7]><br>";
$wolf->hit($hero->attack);


$dragon=new Boss("Dragon", 50, 30, "<img src=$pictures[3]>");
$dragon->getName();
$dragon->getHp();
$dragon->getAttack();
$dragon->getPicture();
$dragon->alert();


echo "<br><img src=$pictures[8]><br>";
$hero->hit($dragon->iceAttack());
echo "<br><img src=$pictures[9]><br>";
$dragon->hit($hero->attack);


?>