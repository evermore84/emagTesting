<?php

namespace Myapp\Game;
use Myapp\Game\Player\Player;
use Myapp\Game\Player\Beast;
$beast     = new Beast("beast",0,0,0,0);
$player    = new Player("Orderus",1,1,1,1,1);



class Game
{
    public function __construct()
    {
        echo "made a game <br>";
        /*
        Land of Emagia
        End after 20 games or one player dies/health = 0;
        The first attack is done by the player with the higher speed. If both players have the same speed,
        than the attack is carried on by the player with the highest luck. After an attack, the players switch
        roles: the attacker now defends and the defender now attacks.
        The damage done by the attacker is calculated with the following formula:
        Damage = Attacker strength – Defender defence
        The damage is subtracted from the defender’s health. An attacker can miss their hit and do no
        damage if the defender gets lucky that turn.
        Orderus’ skills occur randomly, based on their chances, so take them into account on each turn
            */

        //$database  = new Database();


    }
}

