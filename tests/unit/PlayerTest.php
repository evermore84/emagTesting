<?php 
use Myapp\Game\Player;
class PlayerTest extends PHPUnit_Framework_TestCase
{
    public function testPlayerHasSkills()
    {
        //$player= new Player(1,1,1,1,1);
        //$player->getfulldetails();
        $this->assertTrue($player->getfulldetails());
    }
}


