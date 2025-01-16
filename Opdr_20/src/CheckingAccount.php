<?php


namespace Opdr20;

class CheckingAccount extends BankAccount
{

    private float $overdraftLimit;

    public function setOverDraftLimit(float $overdraftLimit) :void
    {
        $this->overdraftLimit = $overdraftLimit;
        $this->accountType = "Checking Account";
    }

 

    public function getOverdraftLimit(): float
    {
        return $this->overdraftLimit;
    }

    protected function validateWithdrawal(float $amount): bool
    {
        return $this->balance - $amount >= -$this->overdraftLimit;
    }
    public function getAccountType(): string
    {
        return $this->accountType;
    }

}
