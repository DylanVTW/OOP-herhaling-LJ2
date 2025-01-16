<?php
namespace Opdr21;

class SavingsAccount extends BankAccount
{
    private float $interestRate;

    public function __construct(string $accountNumber, string $accountHolder, float $balance, float $interestRate)
    {
        parent::__construct($accountNumber, $accountHolder, $balance, 'Savings Account');
        $this->interestRate = $interestRate;
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
