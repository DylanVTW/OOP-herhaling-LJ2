<?php

require 'Character.php';
require 'Weapon.php';


$sword = new Weapon('Sword', 25, 'short');
$bow = new Weapon('Bow', 15, 'long');


$knight = new Character('Knight', 50);
$archer = new Character('Archer', 40);


$knight->addWeapon($sword);


$archer->addWeapon($bow);

echo "<pre>";
echo $knight->listWeapons();


echo $archer->listWeapons();

echo $knight->attack();
echo $archer->attack();
echo "</pre>";