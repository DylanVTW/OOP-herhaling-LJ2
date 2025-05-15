<?php

require_once 'vendor/autoload.php';

use Game\Character;
use Game\Battle;
use Game\Inventory;

// Twee characters aanmaken
$fighter1 = new Character('Ligma', 100, 20, 5, 'Warrior');
$fighter2 = new Character('Sigma', 100, 15, 10, 'tank');


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
echo $battle1->getBattleLog();

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
echo $battle2->getBattleLog();

echo "</pre>";

// Als er geen winnaar is, aantal rondes verhogen en opnieuw proberen
while (strpos($result, 'maximum aantal rondes is bereikt') !== false) {
    $battle2->changeMaxRounds($battle2->getMaxRounds() + 5);
    echo "<p><strong>Geen winnaar gevonden, verhogen naar {$battle2->getMaxRounds()} rondes en opnieuw proberen...</strong></p>";

    echo "<pre>";
    $result = $battle2->startFight($fighter1, $fighter2);
    echo $battle2->getBattleLog();
    echo "</pre>";
}