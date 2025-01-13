<?php

class Weapon
{
    private string $name;
    private int $damage;
    private int $range;


    function __construct(string $name, int $damage, int $range)
    {
        $this->name = $name;
        $this->damage = $damage;
        $this->range = $range;
    }

    public function getWeaponInfo(): string
    {
        return "Het wapen {$this->name} doet {$this->damage} schade en heeft een {$this->range} bereikt";
    }
}