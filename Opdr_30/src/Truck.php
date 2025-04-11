<?php

namespace Opdr_31;


class Truck extends Vehicle{
    private int $loadCapacity;
    
    public function __construct(string $brand, string $model, int $year, string $color, int $loadCapacity){
        parent::__construct($brand, $model, $year, $color);
        $this->loadCapacity = $loadCapacity;
    }

    public function getLoadCapacity(): int{
        return $this->loadCapacity;
    }
}