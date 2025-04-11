<?php


namespace Opdr_30;

class Car extends Vehicle{
    private int $seats;

    public function __construct(string $brand, string $model, int $year, string $color, int $seats){
        parent::__construct($brand, $model, $year, $color);
        $this->seats = $seats;
    }
}