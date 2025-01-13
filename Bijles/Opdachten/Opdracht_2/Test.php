<?php

require_once 'character.php';
require_once 'weapon.php';


$sword = new Weapon('Sword', 10, 2);
$bow = new Weapon('Bow', 5, 10);

$knight = new Character('Knight', 100, 50);
$archer = new Character('Archer', 50, 100);

$knight->addWeapon($sword);
$archer->addWeapon($bow);

echo "<pre>";
echo $knight->listWeapons();
echo $archer->listWeapons();
echo "</pre>";

?>