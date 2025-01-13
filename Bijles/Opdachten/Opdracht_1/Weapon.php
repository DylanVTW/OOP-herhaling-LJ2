<?php

class Weapon
{
    public $name;
    public $damage;
    public $range;


    public function __construct($name, $damage, $range)
    {
        $this->name = $name;
        $this->damage = $damage;
        $this->range = $range;
    }


    public function setName(string $newName): void
    {
        $this->name = $newName;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setDamage(int $newDamage): void
    {
        $this->damage = $newDamage;
    }

    public function getDamage(): int
    {
        return $this->damage;
    }

    public function getWeaponInfo(): string
    {
        return "Het wapen {$this->name} doet {$this->damage} schade en heeft een {$this->range} bereikt";
    }
}