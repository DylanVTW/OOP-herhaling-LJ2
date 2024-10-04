<?php

declare(strict_types=1);

include 'index.php';

$game1 = new Game('Cyberpunk 2077', 'A futuristic open-world RPG', 59.99, ['Action', 'RPG', 'Sci-Fi']);
$game2 = new Game('The Witcher 3', 'A fantasy RPG set in an open world', 39.99, ['Action', 'RPG', 'Fantasy']);
$game3 = new Game('Among Us', 'A multiplayer game of teamwork and betrayal', 4.99, ['Multiplayer', 'Party', 'Casual']);

echo '<pre>';
var_dump($game1);
var_dump($game2);
var_dump($game3);
echo'</pre>';