// <?php
require_once 'character.php';
require_once 'weapon.php';


$sword = new Weapon('Sword', 25);
$bow = new Weapon('Bow', 15);


$knight = new Character(knight, 12, 10);
$archer = new Character(archer, 8, 15);


$knight->addWeapon($sword);
$knight->addWeapon($bow);

$archer->addWeapon($bow);

echo $knight->attack();
echo $archer->attack();
echo $knight->listWeapons();
echo $archer->listWeapons();

?>
//