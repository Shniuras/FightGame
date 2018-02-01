<?php

abstract class StaticValuesWeapon implements WeaponInterface {

    public function getName():string
    {
        return $this->name;
    }
    public function getMinDamage():float
    {
        return $this->minDamage;
    }
    public function getMaxDamage():float
    {
        return $this->maxDamage;
    }
}