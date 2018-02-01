<?php

class Player {
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

    public function getName()
    {
        return $this->name;
    }

    public function getHealth()
    {
        return round($this->health);
    }

    public function getWeapon()
    {
        return $this->weapon;
    }

    public function getArmor()
    {
        return $this->armor;
    }
    public function reduceHealth($amount)
    {
        echo round($this->health = $this->health - $amount);
    }

}