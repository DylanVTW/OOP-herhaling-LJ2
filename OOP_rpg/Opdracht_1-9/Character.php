<?php

class Character{

 public function __construct(
    public string $name,
    public int $health,
    public int $attack,
    public int $defense = 5,
    public int $range = 1,
    public string $role = 'Warrior'
    )
    {
        
    }


    public function setHealth(int $newHealth): void {

        if ($newHealth < 0) {
            echo "Health mag niet onder de 0 komen. \n";
            return;
        } 
        $this->health = $newHealth;
        
    }

    public function getAttack(): int {
        return $this->attack;
    }



    public function displayStats(){
        echo "Name: " . $this->name . "\n";
        echo "Health: " . $this->health . "\n";
        echo "Attack: " . $this->getAttack() . "\n";
        echo "Defense: " . $this->defense . "\n";
        echo "Range: " . $this->range . "\n";
        echo "Role: " . $this->role . "\n";
        echo "------------------------\n";
    }

}