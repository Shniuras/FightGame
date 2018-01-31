<?php

class ClothArmor implements ArmorInterface{
    public function getName():string
    {
        return "Cloth Armor";
    }
    public function getAmount():int
    {
        return 10;
    }
}