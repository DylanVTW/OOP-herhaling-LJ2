<?php

require_once 'weapon.php';

class Character
{
    private string $name;
    private int $health;
    private int $power;


    function __construct(string $name, int $health, int $power)
    {
        $this->name = $name;
        $this->health = $health;
        $this->power = $power;
    }

    public function attack() :string
    {
        return("De character {$this->name} valt aan met een kracht van {$this->power}.");
    }

    private function setName(string $newName): void
    {
        $this->name = $newName;
    }

    private function getName(): string
    {
        return $this->name;
    }

    private function setHealth(int $newHealth): void
    {
        if ($newHealth > 0) {
            $this->health = $newHealth;
        } else {
            echo "Health moet een positieve waarde zijn.";
        }
    }

    private function getHealth(): int
    {
        return $this->health;
    }

}