<?php

class player
{

    private $username;

    private $overall;
    private $attack;
    private $defence;
    private $strength;
    private $hitpoints;
    private $ranged;
    private $prayer;
    private $magic;
    private $cooking;
    private $woodcutting;
    private $fletching;
    private $fishing;
    private $firemaking;
    private $crafting;
    private $smithing;
    private $mining;
    private $herblore;
    private $agility;
    private $thieving;
    private $slayer;
    private $farming;
    private $runecraft;
    private $hunter;
    private $construction;

    
    public function setUsername($username)
    {
        $this->$username = $username;
    }
    public function setOverall($overall)
    {
        $this->$overall = $overall;
    }
    public function setAttack($attack)
    {
        $this->$attack = $attack;
    }
    public function setDefence($defence)
    {
        $this->$defence = $defence;
    }
    public function setStrength($strength)
    {
        $this->$strength = $strength;
    }
    public function setHitPoints($hitpoints)
    {
        $this->$hitpoints = $hitpoints;
    }

    public function getUsername(){
        return $this.$username;
    }

}


?>
