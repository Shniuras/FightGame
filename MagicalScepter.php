<?php

class MagicalScepter extends StaticValuesWeapon {
    public function getName():string
    {
        return "Magic Scepter";
    }
    public function getMinDamage():float
    {
        return 10;
    }
    public function getMaxDamage():float
    {
        return 500;
    }
}