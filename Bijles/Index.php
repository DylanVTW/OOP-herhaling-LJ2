<?php

declare(strict_types=1)

require_once 'BankAccount.php';
require_once 'Bank.php';

$ing = new Bank();
$sigmund = new BankAccount('Sigmund', 6969, 10050);


$ing->addCustomer($sigmund);