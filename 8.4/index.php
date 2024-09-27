<?php

class Product{

    public $name;

    public $price;

    public function formatPrice()
    {
        return number_format($this->price, decimals:2);
    }
}


$game1 = new Product();
$game1->name = "fifa 2023";
$game1->price = 60;

$game2 = new Product();
$game2->name = "call of duty";
$game2->price = 70;


echo $game1->formatPrice(). "<br>";
echo $game1->name. "<br>";
echo $game1->price. "<br>";
echo $game2->name. "<br>";
echo $game2->price. "<br>";

var_dump($game1);
var_dump($game2);