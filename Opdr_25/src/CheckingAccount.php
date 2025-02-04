<?php

namespace Bank;

class CheckingAccount extends BankAccount
{
    private float $overdraftLimit;

    public function __construct(string $accountNumber, string $accountHolder, float $balance, float $overdraftLimit)
    {
        parent::__construct($accountNumber, $accountHolder, $balance, 'Checking Account');
        $this->overdraftLimit = $overdraftLimit;
    }

    public function getOverdraftLimit(): float
    {
        return $this->overdraftLimit;
    }
    public function getAccountType(): string
    {
        return $this->accountType;
    }

    public function getAccountInfo(): string
    {
        return parent::getAccountInfo() . ", Maximum overdracht:{$this->overdraftLimit}";
    }

}