<?php


namespace Opdr19;

class BankAccount
{
    public string $accountNumber;
    public string $accountHolder;
    public float $balance;
    protected string $accountType;

    public function setAccount(string $accountNumber, string $accountHolder, float $balance, string $accountType) :void
    {
        $this->accountNumber = $accountNumber;
        $this->accountHolder = $accountHolder;
        $this->balance = $balance;
    }

    public function getAccountNumber(): string
    {
        return $this->accountNumber;
    }

    public function getAccountHolder(): string
    {
        return $this->accountHolder;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }


    public function deposit(float $amount)
    {
        if ($amount >0) {
            $this->balance += $amount;
        } else {
            return('Bedrag moet positief zijn');
        }
    }

    public function withdraw(float $amount)
    {
        if ($amount > 0) {
            $this->balance -= $amount;
        } else {
            return('Bedrag moet positief zijn en mag niet groter zijn dan de balans');
        }
    }

}
