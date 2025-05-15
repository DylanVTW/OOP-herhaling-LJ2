<?php

namespace Game;
class Character{

    public Inventory $inventory;

        /**
     * Character constructor.
     *
     * @param string $name   De naam van het character.
     * @param int    $health De hoeveelheid health points.
     * @param int    $attack De aanvalskracht.
     * @param int    $defense De verdediging.
     * @param array  $inventory De inventory van het character.
     */

 public function __construct(
    private string $name,
    private int $health,
    private int $attack,
    private int $defense, 
    private string $role
    )
    {
        $this->inventory = new Inventory();
    }

    /**
     * 
     * Past de health van de character aan.
     * 
     * @param int $newHealth De nieuwe health waarde.
     * @return void
     */

    public function setHealth(int $newHealth): void {

        if ($newHealth < 0) {
            echo "Health mag niet onder de 0 komen. \n";
            return;
        } 
        $this->health = $newHealth;
        
    }

    /**
     * 
     * Haalt de health van het character op.
     * 
     * @return int De health van het character.
     */

    public function getHealth(): int {
        return $this->health;
    }

    /**
     * 
     * Haalt de defense van het character op.
     * 
     * @return int De defense van het character.
     */

    public function getDefense(): int {
        return $this->defense;
    }

    /**
     * 
     * Haalt de naam van het character op.
     * 
     * @return string De naam van het character.
     */

    public function getName(): string {
        return $this->name;
    }
        
     
    /**
     * 
     * Haalt de rol van het character op.
     * 
     * @return string De rol van het character.
     */
    public function getRole(): string {
        return $this->role;
    }

        /**
         * 
         * Haalt de attack van het character op.
         * 
         * @return int De aanvalskracht van het character.
         */

    
    public function getAttack(): int {
        return $this->attack;
    }

        /**
     * Vermindert de health van het character op basis van ontvangen schade.
     *
     * @param int $damage De hoeveelheid schade.
     * @return void
     */

    public function takeDamage(int $damage): void {
        $this->health = max(0, $this->health - $damage);
    }


     /**
     * Geeft een korte beschrijving van het character terug.
     *
     * @return string
     */

 
    public function getSummary(): string
    {
        return "{$this->name} | Health: {$this->health}, Attack: {$this->attack}, Defense: {$this->defense}";
    }

}