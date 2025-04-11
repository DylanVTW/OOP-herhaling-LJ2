<?php

require_once 'Character.php';

$hero1 = new Character('Hero', 100, 20,);
$hero2 = new Character('', 0, 0, 10, 1, 'Warrior');



    echo "<pre>";
    $hero1->setHealth(2);
    $hero1->displayStats(); 

    $hero2->setHealth(50);
    $hero2->displayStats();

    echo "\n--- Test getAttack() apart ---\n";
echo "Aanvalskracht van {$hero1->name} is: " . $hero1->getAttack() . "\n";
echo "Aanvalskracht van {$hero2->name} is: " . $hero2->getAttack() . "\n";

  