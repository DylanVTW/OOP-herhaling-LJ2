<?php

//declare(strict_types=1)

require_once 'BankAccount.php';
require_once 'Bank.php';
require_once 'vendor/autoload.php';
use Smarty\Smarty;

$smarty = new Smarty();
$smarty->setTemplateDir('templates/');
$smarty->setCompileDir('templates_c/');

$smarty->display('form.tpl');

//$ing = new Bank();
//$sigmund = new BankAccount('Sigmund', 6969, 10050);
//
//
//$ing->addCustomer($sigmund);