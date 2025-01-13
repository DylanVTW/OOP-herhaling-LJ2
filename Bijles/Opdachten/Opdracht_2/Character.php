<?php

require_once 'weapon.php';

class Character
{
    private string $name;
    private int $health;
    private int $power;
    private array $weapons;



    function __construct(string $name, int $health, int $power)
    {
        $this->name = $name;
        $this->health = $health;
        $this->power = $power;
        $this->weapons = [];
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
            echo "Health moet een positieve waarde zijn." . PHP_EOL;
        }
    }

    private function getHealth(): int
    {
        return $this->health;
    }

    public function addWeapon(Weapon $weapon): void
    {
        $this->weapons[] = $weapon;
    }

    public function listWeapons(): string
    {
        if (empty($this->weapons)) {
            return "{$this->name} heeft geen wapens.";
        }

        $weaponList = "{$this->name} bezit de volgende wapens:\n";
        foreach ($this->weapons as $weapon) {
            $weaponList .= $weapon->getWeaponInfo() . "\n";
        }
        return $weaponList;
    }



    public function attack() :string
    {
        return("De character {$this->name} valt aan met een kracht van {$this->power}.");
    }


}