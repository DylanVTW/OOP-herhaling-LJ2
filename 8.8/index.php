<?php

class Product
{
  public $name;
  public $price;
  public $currency;
  public function __construct($price, $name, $currency = "&euro")
  {
    $this->name = ucfirst($name);
    $this->price = $price;
    $this->currency = $currency;
  }

  public function formatPrice()
  {
    return number_format($this->price, decimals:2);
  }
  public function getProduct()
  {
    return "Het product" .$this->name."kost" .$this->currency."" .$this->price;
  }
}

$game1 = new Product(price:14.99, name:"Hollow Knight", currency:"$");
echo $game1->getProduct();



// echo $game1->name . "<br>";
// echo $game1->currency;
// echo $game1->formatPrice() . "<br>";

var_dump($game1);