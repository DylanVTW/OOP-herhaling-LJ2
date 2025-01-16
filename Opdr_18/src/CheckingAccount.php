<?php


namespace Opdr18;

class CheckingAccount extends BankAccount
{

    private float $overdraftLimit;

    public function setOverDraftLimit(float $overdraftLimit) :void
    {

        $this->overdraftLimit = $overdraftLimit;
    }

 

    public function getOverdraftLimit(): float
    {
        return $this->overdraftLimit;
    }

}
