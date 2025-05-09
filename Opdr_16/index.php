<?php

require 'vendor/autoload.php';

use Opdr16\BankAccount; 
use Opdr16\BankList;


$bankAccount = new BankAccount();
$bankAccount->setAccount(
    '123456789',
    'John Doe',
    1000,
    'savings');


$bankList = new BankList();
$bankList->addAccount($bankAccount);


$bankAccount2 = new BankAccount();
$bankAccount2->setAccount(
    accountNumber: '987654321',
    accountHolder: 'Jane Smith',
    balance: 1500,
    accountType: 'checking'
);
$bankList->addAccount($bankAccount2);

$accounts = $bankList->getAccounts();

foreach ($accounts as $account) {
    echo "<pre>";
    echo "Accountnummer: {$account->getAccountNumber()}<br>";
    echo "Account houder: {$account->getAccountHolder()}<br>";
    echo "Balans: {$account->getBalance()}<br>";
    echo "Account type: {$account->getAccountType()}<br>";
    echo "</pre>";
}