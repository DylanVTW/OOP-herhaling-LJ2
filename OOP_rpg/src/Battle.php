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


    private int $fighter1OriginalHealth = 100;
    private int $fighter2OriginalHealth = 100;

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

    public function getFighter1OriginalHealth(): int {
        return $this->fighter1OriginalHealth;
    }

    public function getFighter2OriginalHealth(): int {
        return $this->fighter2OriginalHealth;
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
     * @param Character $character1
     * @param Character $character2
     * @return string Resultaat van het gevecht.
     */
    public function startFight(Character $character1, Character $character2): string {
        $this->battleLog = "Het gevecht tussen {$character1->getName()} en {$character2->getName()} is begonnen!\n\n";

        while ($character1->getHealth() > 0 && $character2->getHealth() > 0 && $this->roundNumber <= $this->maxRounds) {
            // character 1 valt aan
            $damage1 = $this->calculateDamage($character1, $character2);
            $character2->setHealth($character2->getHealth() - $damage1);
            $this->logAttack($character1, $character2, $damage1);

            if ($character2->getHealth() <= 0) {
                $this->battleLog .= "🏆 {$character1->getName()} heeft gewonnen!\n";
                return $this->battleLog;
            }

            // character 2 valt aan
            $damage2 = $this->calculateDamage($character2, $character1);
            $character1->setHealth($character1->getHealth() - $damage2);
            $this->logAttack($character2, $character1, $damage2);

            if ($character1->getHealth() <= 0) {
                $this->battleLog .= "🏆 {$character2->getName()} heeft gewonnen!\n";
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
