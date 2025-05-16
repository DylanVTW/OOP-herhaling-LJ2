<?php

require_once 'vendor/autoload.php';

use Game\Character;
use Game\Battle;
use Game\Inventory;
use Smarty;


$template = new Smarty();
$template->setTemplateDir(__DIR__ . 'templates');
$template->setCompileDir(__DIR__ . 'templates_c');
$template->setCacheDir(__DIR__ . 'cache');
$template->setConfigDir(__DIR__ . 'configs');

// Twee characters aanmaken
$fighter1 = new Character('Ligma', 100, 20, 5, 'Warrior', 1);
$fighter2 = new Character('Sigma', 100, 15, 10, 'tank', 2);


// Voorbeeld van het toevoegen van items aan de inventory
$fighter1->inventory->addItem('Zwaard');
$fighter1->inventory->addItem('Schild');

echo  "<pre>";
echo "Items in de inventory van {$fighter1->getName()}:\n";
foreach ($fighter1->inventory->getItems() as $item) {
    echo "- $item\n";
}
echo "</pre>";

$fighter1->inventory->removeItem('Schild');

echo  "<pre>";
echo "Items in de inventory van {$fighter1->getName()} na verwijderen van het schild:\n";
foreach ($fighter1->inventory->getItems() as $item) {
    echo "- $item\n";
}
echo "</pre>";

echo "<pre>";

echo "=== Eerste gevecht ===\n\n";
// Battle object aanmaken
$battle1 = new Battle();
$result = $battle1->startFight($fighter1, $fighter2);
$battle1->changeMaxRounds(5); // Limiteer tot 5 rondes


echo "\n--- Einde eerste gevecht ---\n\n";

// ==================== //
// Health resetten     //
// ==================== //
echo "Health resetten voor het volgende gevecht...\n";
$fighter1->setHealth(100);
$fighter2->setHealth(100);

echo "Health Ligma: " . $fighter1->getHealth() . "\n";
echo "Health Sigma: " . $fighter2->getHealth() . "\n\n";

// ==================== //
// Tweede gevecht      //
// ==================== //
echo "=== Tweede gevecht ===\n\n";

$battle2 = new Battle();
$result = $battle2->startFight($fighter1, $fighter2);
$battle2->changeMaxRounds(10);


echo "</pre>";

// Als er geen winnaar is, aantal rondes verhogen en opnieuw proberen
$template->assign('charaacter', $fighter1);
$template->display('character.tpl');
