<?php

require_once 'weapon.php';

class Character
{
    private string $name;
    private int $health;
    private int $power;
    private int $damage = 0;

    private array $weapon = [];

    function __construct(string $name, int $health, int $power)
    {
        $this->name = $name;
        $this->health = $health;
        $this->power = $power;
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
        $this->health = $newHealth;
    }

    private function getHealth(): int
    {
        return $this->health;
    }

    private function addWeapon(Weapon $weapon) : void
    {
        $this->weapon[] = $weapon;
    }

    private function listWeapons(): string
    {
        if (empty($this->weapon)) {
            return "Geen wapens womp womp";
        }
        foreach ($this->weapon as $weapon) {
            $weapon->getWeaponInfo();
        }
    }

    public function setDamage(int $damage): void
    {
        $this->damage = $damage;
    }

    public function getDamage(): int
    {
        return $this->damage;
    }

    function attack() :string
    {
        return("De character {$this->name} valt aan met een kracht van {$this->power}");
    }
}