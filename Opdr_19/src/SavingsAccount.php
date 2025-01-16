<?php


namespace Opdr19;

class SavingsAccount extends BankAccount
{
private float $interestRate;

    public function setInterestRate(float $interestRate) :void
    {

        $this->interestRate = $interestRate;
        $this->accountType = "Savings Account";
    }

    public function getInterestRate(): float
    {
        return $this->interestRate;
    }

    public function getAccountType(): string
    {
        return $this->accountType;
    }

}
