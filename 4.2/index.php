<?php
$books = 
[
    ["title" => "Sigmund", "writer" => "Sigmund Bush", "pageTotal" => 42],
    ["title" => "Angry Sigmund", "writer" => "Sigmund Bush", "pageTotal" => 420],
    ["title" => "Egg Sigmund", "writer" => "Sigmund Bush II", "pageTotal" => 4200],
];

echo $books[1]["title"];
echo "<br>";

$books[0]["pageTotal"] = 350;

$books += ["title" => "De Ontdekking van de Hemel", "writer" => "Harry Mulisch", "pageTotal" => 900];

echo "<pre>";
var_dump($books);
echo "</pre>";
?>  