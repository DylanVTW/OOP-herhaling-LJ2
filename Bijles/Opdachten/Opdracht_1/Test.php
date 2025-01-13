<?php

require_once 'character.php';
require_once 'weapon.php';


$character = new Character('Sigma', 100, 50);
$weapon = new Weapon('Sword', 20, 10);

echo $character->attack();


?>