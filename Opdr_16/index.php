<?php

require 'vendor/autoload.php';

use Opdr_16\BankAccount; 
use Opdr_16\BankList;


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
    accountnumber: '987654321',
    accountHolder: 'Jane Smith',
    balance: 1500,
    accountType: 'checking'
);
$bankList->addAccount(account: $bankAccount2);

$accounts = $bankList->getAccounts();

foreach ($accounts as $account) {
    echo "Accountnummer: {$account->getBalance()}<br>";
    echo "Account houder: {$account->getBalance()}<br>";
    echo "Balans: {$account->getBalance()}<br>";
    echo "Account type: {$account->getBalance()}<br>";
}