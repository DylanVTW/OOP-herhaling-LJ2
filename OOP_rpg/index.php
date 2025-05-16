<?php

require_once 'vendor/autoload.php';

use Game\Character;
use Game\Battle;
use Game\Inventory;
use Smarty\Smarty;
use Game\CharacterList;

session_start();


$template = new Smarty();
$template->setTemplateDir(__DIR__ . '/templates');
$template->setCompileDir(__DIR__ . '/templates_c');


$characterList = $_SESSION['characterList'] ?? new CharacterList();
$page = $_GET['page'] ?? '';

switch ($page) {
    case 'createCharacter':
        $template->display('createCharacterForm.tpl');
        break;
    case 'saveCharacter':
        if (
            !empty($_POST['name']) && !empty($_POST['health']) && !empty($_POST['attack'])
            && !empty($_POST['defense']) && !empty($_POST['role']) && !empty($_POST['range'])
        ) {
            $character = new Character($_POST['name'], $_POST['health'], $_POST['attack'], $_POST['defense'], $_POST['role'], $_POST['range']);
            $characterList->addCharacter($character);
            $template->assign('character', $character);
            $template->display('character.tpl');
        } else {
            $template->assign('error', 'Vul alstublieft alle velden in.');
            $template->display('createCharacterForm.tpl');
        }
        break;

    case 'listCharacters':
        $template->assign('characters', $characterList->getCharacters());
        $template->display('characterList.tpl');
        break;

    case 'viewCharacter':
        if (!empty($_GET['name'])) {
            $character = $characterList->getCharacter($_GET['name']);
            if ($character) {
                $template->assign('character', $character);
                $template->display('character.tpl');
            } else {
                $template->assign('message', 'Character not found.');
                $template->display('error.tpl');
            }
        } else {
            $template->assign('message', 'No character name provided.');
            $template->display('error.tpl');
        }
        break;
    case 'deleteCharacter':
        if (!empty($_GET['name'])) {
            $character = $characterList->getCharacter($_GET['name']);
            if ($character) {
                $characterList->removeCharacter($character);
                $template->assign('message', 'Character deleted successfully.');
            } else {
                $template->assign('message', 'Character not found.');
            }
        } else {
            $template->assign('message', 'No character name provided.');
        }
        $template->display('error.tpl');
        break;

    default:
        $template->display('home.tpl');
        break;
}



$_SESSION['characterList'] = $characterList;



// echo  "<pre>";
// echo "Items in de inventory van {$fighter1->getName()}:\n";
// foreach ($fighter1->inventory->getItems() as $item) {
//     echo "- $item\n";
// }
// echo "</pre>";

// $fighter1->inventory->removeItem('Schild');

// echo  "<pre>";
// echo "Items in de inventory van {$fighter1->getName()} na verwijderen van het schild:\n";
// foreach ($fighter1->inventory->getItems() as $item) {
//     echo "- $item\n";
// }
// echo "</pre>";

// echo "<pre>";

// echo "=== Eerste gevecht ===\n\n";
// // Battle object aanmaken
// $battle1 = new Battle();
// $result = $battle1->startFight($fighter1, $fighter2);
// $battle1->changeMaxRounds(5); // Limiteer tot 5 rondes


// echo "\n--- Einde eerste gevecht ---\n\n";

// // ==================== //
// // Health resetten     //
// // ==================== //
// echo "Health resetten voor het volgende gevecht...\n";
// $fighter1->setHealth(100);
// $fighter2->setHealth(100);

// echo "Health Ligma: " . $fighter1->getHealth() . "\n";
// echo "Health Sigma: " . $fighter2->getHealth() . "\n\n";

// // ==================== //
// // Tweede gevecht      //
// // ==================== //
// echo "=== Tweede gevecht ===\n\n";

// $battle2 = new Battle();
// $result = $battle2->startFight($fighter1, $fighter2);
// $battle2->changeMaxRounds(10);


// echo "</pre>";

// Als er geen winnaar is, aantal rondes verhogen en opnieuw proberen

