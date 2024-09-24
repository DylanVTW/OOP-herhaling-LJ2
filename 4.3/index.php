<?php
$pets =
[
    ["Species" => "Gooner", "Name" => "Max Goonerism", "Age" => NULL],
    ["Species" => "Leprechaun", "Name" => "Ginger Tielun", "Age" => 69],
    ["Species" => "Wolf", "Name" => "Wolf Haley", "Age" => 2]
];
echo $pets[2]["Name"]."<br>".$pets[2]["Species"]."<br>";

$pets[1]["Age"] += 1;

$pets += ["Species" => "Kat", "Name" => "Simba", "Age" => 2];

echo "<pre>";
var_dump($pets);
echo "</pre>";
?>
?>