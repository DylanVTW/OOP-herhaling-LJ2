<?php


namespace Opdr17;

class BankAccount
{
    private string $accountNumber;
    private string $accountHolder;
    private float $balance;
    private string $accountType;

    public function setAccount(string $accountNumber, string $accountHolder, float $balance, string $accountType) :void
    {
        $this->accountNumber = $accountNumber;
        $this->accountHolder = $accountHolder;
        $this->balance = $balance;
        $this->accountType = $accountType;
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

    public function getAccountType(): string
    {
        return $this->accountType;
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
