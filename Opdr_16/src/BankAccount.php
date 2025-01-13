<?php


namespace Opdr_16;


class BankAccount
{
    private string $accountnumber;
    private string $accountHolder;
    private float $balance;
    private string $accountType;

    public function setAccount(string $accountnumber, string $accountHolder, float $balance, string $accountType)
    {
        $this->accountnumber = $accountnumber;
        $this->accountHolder = $accountHolder;
        $this->balance = $balance;
        $this->accountType = $accountType;
    }

    public function deposit(float $amount)
    {
        if ($amount < 0) {
            throw new \InvalidArgumentException('Bedrag moet positief zijn');
        }else {
            $this->balance += $amount;
        }
    }

    public function withdraw(float $amount)
    {
        if ($amount > 0 && $this->balance >= $amount) {
            $this->balance -= $amount;
        } else {
            throw new \InvalidArgumentException('Bedrag moet positief zijn en mag niet groter zijn dan de balans');
        }
    }

    public function getBalance(): float
    {
        return $this->balance;
    }


}
