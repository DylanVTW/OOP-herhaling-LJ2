<?php

class BankAccount
{
    private string $name;

    private string $accountNumber;

    private float $balance;


    public function __construct(string $name, string $accountNumber, float $balance)
    {
        if (!$this->isValidAccountNumber($accountNumber)) {
            throw new Exception(message: "Ongeldige rekeningnummer");
        }

        $this->name = $name;
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
    }

    public function setAccountNumber(string $number): void
    {
        $this->accountNumber = $number;
    }

    public function getAccountNumber(): string
    {
        return $this->accountNumber;
    }

    public function setBalance(float $amount): void
    {
        $this->balance = $amount;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    private function isValidAccountNumber(string $accountnumber): bool
    {
        return str_starts_with($accountnumber, needle: 'NL') && strlen($accountnumber) === 18;
    }
}

