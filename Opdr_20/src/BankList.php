<?php

namespace Opdr20;

class BankList
{
    private array $bankAccounts = [];

    public function addAccount($account)
    {
        $this->bankAccounts[] = $account;
    }

    public function getAccounts(): array
    {
        return $this->bankAccounts;
    }

}


