<?php
$products = [
    ["name" => "laptop", "price" => 100, "inStock" => 10],
    ["name" => "smartphone", "price" => 200, "inStock" => 20],
    ["name" => "monitor", "price" => 300, "inStock" => 30],
    ["name" => "toetsenbord", "price" => 400, "inStock" => 40],
    ["name" => "tablet", "price" => 300, "inStock" => 50]
];
echo  "product". $products[1]["name"]. ", Price". $products[1]["price"];

$products[3]["inStock"] = 120;