<?php


namespace Opdr17;

class CheckingAccount
{
    private string $accountNumber;
    private string $accountHolder;
    private float $balance;
    private string $accountType;

    private float $overdraftLimit;

    public function setAccount3(string $accountNumber, string $accountHolder, float $balance, string $accountType, float $overdraftLimit) :void
    {
        $this->accountNumber = $accountNumber;
        $this->accountHolder = $accountHolder;
        $this->balance = $balance;
        $this->accountType = $accountType;
        $this->overdraftLimit = $overdraftLimit;
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

    public function getOverdraftLimit(): float
    {
        return $this->overdraftLimit;
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
