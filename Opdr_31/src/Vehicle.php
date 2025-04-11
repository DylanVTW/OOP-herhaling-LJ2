<?php
namespace Opdr_31;

abstract class Vehicle{
    private string $brand;
    private string $model;
    private int $year;
    private string $color;

    public function __construct(string $brand, string $model, int $year, string $color){
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->color = $color;
    }

    public function getBrand(): string{
        return $this->brand;
    }

    public function getModel(): string{
        return $this->model;
    }

    public function getYear(): int{
        return $this->year;
    }

    public function getColor(): string{
        return $this->color;
    }

    


}