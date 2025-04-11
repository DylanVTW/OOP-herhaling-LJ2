<?php

namespace Opdr_31;

class Motorcycle extends Vehicle{
    private bool $offRoad;

    public function __construct(string $brand, string $model, int $year, string $color, bool $offRoad){
        parent::__construct($brand, $model, $year, $color);
        $this->offRoad = $offRoad;
    }
}