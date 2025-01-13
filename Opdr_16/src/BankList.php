<?php

namespace Opdr_16;

use Opdr_16\BankAccount;

class BankList
{
    private $bankAccounts = [];

    public function addAccount(BankAccount $account)
    {
        $this->bankAccounts[] = $account;
    }

    public function getAccounts(): array
    {
        return $this->bankAccounts;
    }

}