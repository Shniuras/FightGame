<?php

include "includes.php";

$exalibur = new Excalibur();
$clothArmor = new ClothArmor();
$player1 = new Player('Jonas', 2000, $exalibur, $clothArmor);

$magicScepter = new Pickaxe();
$nanoSuit = new ChainVest();
$player2 = new Player('Petras', 2000, $magicScepter, $nanoSuit);

$game = new Game($player1, $player2);
$game->start();