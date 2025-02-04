<?php

require 'vendor/autoload.php';

use Bank\BankAccount; 
use Bank\BankList;
use Bank\SavingsAccount;
use Bank\CheckingAccount;


$bankAccount = new SavingsAccount("123456789", "John Smith", 1000, 0.01);
echo $bankAccount->getAccountInfo();
// $bankAccount->setAccount(
//     '123456789',
//     'John Smith',
//     1000,
//     'savings',
// );



$bankList = new BankList();
$bankList->addAccount($bankAccount);


$bankAccount2 = new CheckingAccount("987654321", "Jane Doe", 1500, 500);
echo $bankAccount2->getAccountInfo();
// $bankAccount2->setAccount(
//     accountNumber: '987654321',
//     accountHolder: 'Jane Doe',
//     balance: 1500,
//     accountType: 'checking',
// );

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