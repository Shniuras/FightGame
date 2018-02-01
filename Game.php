<?php

class Game {
    protected $player1;
    protected $player2;

    public function __construct( $player1,  $player2)
    {
        $this->player1 = $player1;
        $this->player2 = $player2;
    }

    public function start()
    {
        while ($this->player1->getHealth() > 0 || $this->player2->getHealth() > 0){
            if($this->player1->getHealth() > 0){
                echo "<br>";
                echo $this->player2->reduceHealth($this->calculateDamage($this->player1->getWeapon(), $this->player2->getArmor()));
                echo "<br>";
            } else {
                echo "Player 1 is dead";
                break;
            }
            if ($this->player2->getHealth()>0){
                echo "<br>";
                echo $this->player1->reduceHealth($this->calculateDamage($this->player2->getWeapon(), $this->player1->getArmor()));
                "<br>";
            } else {
                echo "Player2 is dead";
                break;
            }

        }
    }

    protected function calculateDamage($weapon, $armor){
        $weaponDamage = rand($weapon->getMinDamage(), $weapon->getMaxDamage());
        return $weaponDamage * 100/(100+$armor->getAmount());
    }
}