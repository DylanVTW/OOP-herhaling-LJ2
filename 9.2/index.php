<?php
declare(strict_types=1); 

class Game
{
    public string $name;
    public string $description;
    public float $price;
    public array $tags;

    public function __construct(string $name, string $description, float $price, array $tags)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->tags = $tags;
    }


    public function getDetails(): string
    {
        $tags_string = implode(', ', $this->tags); // Tags array naar een string converteren
        return "Name: $this->name\nDescription: $this->description\nPrice: €" . number_format($this->price, 2) . "\nTags: $tags_string";
    }
}