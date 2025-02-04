<?php

namespace BankApp;

class BankList {
    /** @var BankAccount[] $bankAccounts */
    private array $bankAccounts = [];

    /** @param BankAccount $account
     *  @return void
     */
    public function addAccount(BankAccount $account): void {
        $this->bankAccounts[] = $account;
    }

    /**
     * Haal alle bankrekeningen op.
     *
     * @return BankAccount[]
     */
    public function getAccounts(): array {
        return $this->bankAccounts;
    }
}