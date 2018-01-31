<?php

class Player implements PlayerInterface {
    protected $name;
    protected $health;
    protected $weapon;
    protected $armor;

    public function __construct(string $name, float $health, WeaponInterface $weapon, ArmorInterface $armor)
    {
        $this->name = $name;
        $this->health = $health;
        $this->weapon = $weapon;
        $this->armor = $armor;
    }

    public function getName():string
    {
        return $this->name;
    }

    public function getHealth():float
    {
        return $this->health;
    }

    public function getWeapon():WeaponInterface
    {
        return $this->weapon;
    }

    public function getArmor():ArmorInterface
    {
        return $this->armor;
    }
    public function reduceHealth($amount):float
    {
        return $this->health - $amount;
    }

}