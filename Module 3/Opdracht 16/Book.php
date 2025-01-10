<?php

class Book
{
    private string $title;
    private string $author;
    private float $price;



public function __construct(string $title, string $author, float $price){
    $this->title = $title;
    $this->author = $author;
    $this->price = $price;
}


/**
 * @return string
 */
public function getTitle(): string
{
    return $this->title;
}


/**
 * @return string
 */
public function getAuthor(): string
{
    return $this->author;
}

/**
 * @return float
 */
public function getPrice(): float
{
    return $this->price;
}

}