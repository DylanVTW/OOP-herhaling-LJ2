<?php

require 'vendor/autoload.php';

use Opdr18\BankAccount; 
use Opdr18\BankList;
use Opdr18\SavingsAccount;
use Opdr18\CheckingAccount;


$bankAccount = new SavingsAccount();
$bankAccount->setAccount(
    '123456789',
    'John Doe',
    1000,
    'savings',
);
$bankAccount->setInterestRate(0.01);



$bankList = new BankList();
$bankList->addAccount($bankAccount);


$bankAccount2 = new CheckingAccount();
$bankAccount2->setAccount(
    accountNumber: '987654321',
    accountHolder: 'Jane Smith',
    balance: 1500,
    accountType: 'checking',
);
$bankAccount2->setOverdraftLimit(500);
$bankList->addAccount($bankAccount2);

$accounts = $bankList->getAccounts();

foreach ($accounts as $account) {
    echo "<pre>";
    echo "Accountnummer: {$account->getAccountNumber()}<br>";
    echo "Account houder: {$account->getAccountHolder()}<br>";
    echo "Balans: {$account->getBalance()}<br>";
    echo "Account type: {$account->getAccountType()}<br>";

    if ($account instanceof SavingsAccount) {
        echo "Rente: {$account->getInterestRate()}<br>";
    } elseif ($account instanceof CheckingAccount) {
        echo "Overdraft limit: {$account->getOverdraftLimit()}<br>";
    }
    echo "</pre>";
}