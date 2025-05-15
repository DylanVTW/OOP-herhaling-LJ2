<?php

namespace Game;

use Game\Character;

class Battle {
    
    /**
     * De battle log met alle gebeurtenissen.
     * 
     * @var string
     */
    private string $battleLog = "";

    /**
     * Het maximaal aantal rondes.
     * 
     * @var int
     */
    private int $maxRounds = 10;

    /**
     * Het huidige ronde nummer.
     * 
     * @var int
     */
    private int $roundNumber = 1;

    /**
     * Geeft de battle log terug.
     * 
     * @return string
     */
    public function getBattleLog(): string {
        return $this->battleLog;
    }

    /**
     * Geeft het maximale aantal rondes terug.
     * 
     * @return int
     */
    public function getMaxRounds(): int {
        return $this->maxRounds;
    }

    /**
     * Geeft het huidige ronde nummer terug.
     * 
     * @return int
     */
    public function getRoundNumber(): int {
        return $this->roundNumber;
    }

    /**
     * Past het maximale aantal rondes aan.
     * 
     * @param int $rounds Het nieuwe maximum aantal rondes.
     * @return void
     */
    public function changeMaxRounds(int $rounds): void {
        $this->maxRounds = $rounds;
    }

    /**
     * Start het gevecht tussen twee characters.
     * 
     * @param Character $fighter1
     * @param Character $fighter2
     * @return string Resultaat van het gevecht.
     */
    public function startFight(Character $fighter1, Character $fighter2): string {
        $this->battleLog = "Het gevecht tussen {$fighter1->getName()} en {$fighter2->getName()} is begonnen!\n\n";

        while ($fighter1->getHealth() > 0 && $fighter2->getHealth() > 0 && $this->roundNumber <= $this->maxRounds) {
            // Fighter 1 valt aan
            $damage1 = $this->calculateDamage($fighter1, $fighter2);
            $fighter2->takeDamage($damage1);
            $this->logAttack($fighter1, $fighter2, $damage1);

            if ($fighter2->getHealth() <= 0) {
                $this->battleLog .= "🏆 {$fighter1->getName()} heeft gewonnen!\n";
                return $this->battleLog;
            }

            // Fighter 2 valt aan
            $damage2 = $this->calculateDamage($fighter2, $fighter1);
            $fighter1->takeDamage($damage2);
            $this->logAttack($fighter2, $fighter1, $damage2);

            if ($fighter1->getHealth() <= 0) {
                $this->battleLog .= "🏆 {$fighter2->getName()} heeft gewonnen!\n";
                return $this->battleLog;
            }

            $this->roundNumber++;
        }

        if ($this->roundNumber > $this->maxRounds) {
            $this->battleLog .= "⏳ Het maximum aantal rondes is bereikt. Het gevecht is geëindigd zonder winnaar.\n";
        }

        return $this->battleLog;
    }

    /**
     * Bereken de schade van een aanval met een random factor (70% - 100%).
     * 
     * @param Character $attacker
     * @param Character $defender
     * @return int De berekende schade.
     */
    private function calculateDamage(Character $attacker, Character $defender): int {
        $randomFactor = mt_rand(70, 100) / 100; // Random factor tussen 0.7 en 1.0
        $damage = $attacker->getAttack() * $randomFactor - $defender->getDefense();
        return max(0, (int) round($damage)); // Schade is altijd minimaal 0
    }

    /**
     * Logt een aanval in de battleLog.
     * 
     * @param Character $attacker
     * @param Character $defender
     * @param int $damage
     * @return void
     */
    private function logAttack(Character $attacker, Character $defender, int $damage): void {
        $this->battleLog .= "Ronde {$this->roundNumber}: {$attacker->getName()} valt aan en doet {$damage} schade aan {$defender->getName()}.\n";
        $this->battleLog .= "{$defender->getName()} heeft nu {$defender->getHealth()} health.\n\n";
    }
}
