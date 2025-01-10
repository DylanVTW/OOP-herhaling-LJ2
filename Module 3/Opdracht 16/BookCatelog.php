<?php


class BookCatelog
{
    private array $catelog = [];


    /**
     * @return array
     */
    
    public function getCatelog(): array
    {
        return $this->catelog;
    }


    public function addBook(Book $book)
    {
        $this->catelog[] = $book;
    }


    public function removeBook(Book $book)
    {
        $key = array_search($book, $this->catelog);
        if($key !== false){
            unset($this->catelog[$key]);
        }
    }

    public function getAvgPrice(): float
    {
        $total = 0;
        foreach($this->catelog as $book){
            $total += $book->getPrice();
        }
        return $total / count($this->catelog);
    }
}