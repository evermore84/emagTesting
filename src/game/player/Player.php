<?php
namespace Myapp\Game\Player;
namespace Myapp\Game\HocusPocus;
use Myapp\Game\Player\Player;
use Myapp\Game\Player\Beast;
/*
use Myapp\Game\Player\Player;
use Myapp\Game\Player\Beast;
$beast     = new Beast("beast",0,0,0,0);
$player    = new Player("Orderus",1,1,1,1,1);  
*/

$test = new HocusPocus::spawn();
use phpDocumentor\Reflection\Types\Object_;
class Beast
{ 
    private $health;
    private $strength;
    private $defence;
    private $speed;
    private $luck;
  
    public function __construct($health, $strength, $defence, $speed, $luck)
    {
        //$this->speed = mt_rand(70,100);
        $this->health = $health;
        $this->strength = $strength;
        $this->defence = $defence;
        $this->speed = $speed;
        $this->luck = $luck;
        echo "Beast created". '<br>'; 
        echo $this->luck . '<br>';
        echo $this->speed . '<br>';
    }
    public function setskill($valmin, $valmax) {
        return $this->health = mt_rand($valmin,$valmax);
    }
    public function getfulldetails(Object $object)
    {
        echo "<pre";
         var_dump($object);
        echo "</pre>";    
        }


}
class Player extends Beast{
   // define("rapidStrike",1 );
   // const $magicShield = 1 ;
   private $name;
    // Extending the player Skills that only the player has 
   
    public function __construct($name, $health, $strength, $defence, $speed, $luck) 
    {   
        $this->name = $name;
        $this->health = $health;
        $this->strength = $strength;
        $this->defence = $defence;
        $this->speed = $speed;
        $this->luck = $luck;
        echo $this->luck;
        echo "Player created". '<br>'; 
/*
Name Orderus
mt_rand() ?
● Health: 70 - 100
● Strength: 70 - 80
● Defence: 45 – 55
● Speed: 40 – 50
● Luck: 10% - 30% (0% means no luck, 100% lucky all the time). */
    } 

    
    // Skills that only the player has 
    

}

Class HocusPocus
{

    public static function spawn() 
    {
        //return new Beast($health, $strength, $defence, $speed, $luck);
        echo "new spawn created";
    }

}
