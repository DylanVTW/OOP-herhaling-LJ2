<?php

class Game
{

    public $name;
    public $description;
    public $price;
    public $tags;

    public function __construct($name, $description, $price, $tags)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->tags = $tags;
    }
    public function getDetails()
    {
        $tags_string = implode(', ', $this->tags);
        return "Name: $this->name\nDescription: $this->description\nPrice: €" . number_format($this->price, 2) . "\nTags: $tags_string";
    }
}