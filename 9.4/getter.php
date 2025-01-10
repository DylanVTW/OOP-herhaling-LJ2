<?php

declare(strict_types=1);

require_once 'index.php';
require_once 'ligmasigmaballs.php';




$game1 = new Game('Cyberpunk 2077', 'A futuristic open-world RPG', 59.99, ['Action', 'RPG', 'Sci-Fi']);
$game2 = new Game('The Witcher 3', 'A fantasy RPG set in an open world', 39.99, ['Action', 'RPG', 'Fantasy']);
$game3 = new Game('Among Us', 'A multiplayer game of teamwork and betrayal', 4.99, ['Multiplayer', 'Party', 'Casual']);

$ohio = new Player();
$ohio->addGame($game1);
$ohio->addGame($game2);


$rizzler = new Player();
$rizzler->addGame($game1);
$rizzler->addGame($game3);

$sigmund = new Player();
$sigmund->addGame($game2);
$sigmund->addGame($game3);

echo '<>';
var_dump($ohio);
var_dump($rizzler);
var_dump($sigmund);


foreach($piet->getGames() as $game)
{
    foreach($game as $item)
    {
        if(is_array($item))
        {
            foreach($item as $subitem)
            {
                echo $subitem . '<br>';
            }
        }
        else
        {
            echo $item . '<br>';
        }
    }
}