<?php

require_once 'weapon.php';

class Character
{
    private string $name;
    private int $health;
    private int $power;

    private array $weapon[];


    function __construct(string $name, int $health, int $power)
    {
        $this->name = $name;
        $this->health = $health;
        $this->power = $power;
    }

    public function setName(string $newName): void
    {
        $this->name = $newName;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setHealth(int $newHealth): void
    {
        $this->health = $newHealth;
    }

    public function getHealth(): int
    {
        return $this->health;
    }

    public function addWeapon(Weapon $weapon) : void
    {
        $this->weapon[] = $weapon;
    }

    public function listWeapons(): string
    {
        if (empty($this->weapon)) {
            return "Geen wapens womp womp";
        }
        foreach ($this->weapon as $weapon) {
            $weapon->getWeaponInfo();
        }
    }





    function attack() :string
    {
        return("De character {$this->name} valt  aan met een kracht van {$this->power}");
    }
}



