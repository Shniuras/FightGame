<?php

$exalibur = new Excalibur();
$clothArmor = new ClothArmor();
$player1 = new Player('Jonas', 2000, $exalibur, $clothArmor);

$magicScepter = new MagicalScepter();
$nanoSuit = new NanoSuit();
$player2 = new Player('Petras', 1500, $magicScepter, $nanoSuit);

$game = new Game($player1, $player2);
$game->start();