<?php


namespace Opdr18;

class SavingsAccount extends BankAccount
{
private float $interestRate;

    public function setInterestRate(float $interestRate) :void
    {

        $this->interestRate = $interestRate;
    }

    public function getInterestRate(): float
    {
        return $this->interestRate;
    }

}
