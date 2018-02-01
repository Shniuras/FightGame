<?php

interface PlayerInterface {
    public function getWeapon():WeaponInterface;
    public function getArmor():ArmorInterface;
    public function getName():string ;
    public function reduceHealth($amount);
    public function getHealth():int;
}