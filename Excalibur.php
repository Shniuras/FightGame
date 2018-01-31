<?php

class Excalibur extends StaticValuesWeapon {
    public function getName():string
    {
        return "Excalibur";
    }
    public function getMinDamage():float
    {
        return 100;
    }
    public function getMaxDamage():float
    {
        return 150;
    }
}