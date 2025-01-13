<?php

require 'Weapon.php';

class Character
{
    private string $name;
    private int $health;
    private int $power;
    private int $damage; 
    private array $weapons; 
    public function __construct(string $name, int $power)
    {
        $this->name = $name;
        $this->power = $power;
        $this->health = 100;
        $this->damage = 0;
        $this->weapons = [];
    }

    public function attack(): string
    {
        return "De character {$this->name} valt aan met een kracht van {$this->power}.";
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $newName): void
    {
        $this->name = $newName;
    }

    public function getHealth(): int
    {
        return $this->health;
    }

    public function setHealth(int $newHealth): void
    {
        if ($newHealth > 0) {
            $this->health = $newHealth;
        } else {
            echo "Health moet een positieve waarde zijn." . PHP_EOL;
        }
    }

    public function getDamage(): int
    {
        return $this->damage;
    }

    public function setDamage(int $damage): void
    {
        if ($damage >= 0) {
            $this->damage = $damage;
        } else {
            echo "Damage moet een positieve waarde zijn." . PHP_EOL;
        }
    }

    public function addWeapon(Weapon $weapon): void
    {
        $this->weapons[] = $weapon;
        $this->updateDamage(); 
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
        $weaponList .= "Totale schade: " . $this->damage . "\n";

        return $weaponList;
    }

    private function calculateTotalDamage(): int
    {
        $totalDamage = 0;
        foreach ($this->weapons as $weapon) {
            $totalDamage += $weapon->getDamage();
        }
        return $totalDamage;
    }

    private function updateDamage(): void
    {
        $this->damage = $this->calculateTotalDamage();
    }
}