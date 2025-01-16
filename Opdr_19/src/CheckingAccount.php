<?php


namespace Opdr19;

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
    public function getAccountType(): string
    {
        return $this->accountType;
    }

}
