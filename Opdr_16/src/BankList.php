<?php

namespace Opdr16;

class BankList
{
    private array $bankAccounts = [];

    public function addAccount(BankAccount $account)
    {
        $this->bankAccounts[] = $account;
    }

    public function getAccounts(): array
    {
        return $this->bankAccounts;
    }

}



