<?php

class Pickaxe extends StaticValuesWeapon  {
    public function getName():string
    {
        return "Pickaxe";
    }
    public function getMinDamage():float
    {
        return 50;
    }
    public function getMaxDamage():float
    {
        return 100;
    }
}