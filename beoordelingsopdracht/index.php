<?php

class BankAccount {
    public  $accountNumber;
    public  $balance;


    public function __construct( $accountNumber,  $balance = 0.0) {
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
    }

    public function getAccountNumber()  {
        return $this->accountNumber;
    }

    public function setAccountNumber( $accountNumber){
        $this->accountNumber = $accountNumber;
    }


    public function getBalance()  {
        return $this->balance;
    }


    public function deposit($amount){
        if ($amount > 0) {
            $this->balance += $amount;
            echo "U heeft $$amount op uw bankaccount gezet. Uw huidige saldo is: $" . number_format($this->balance, decimals: 2) . "<br>";
        } else {
            echo "Deposit amount must be positive.<br>";
        }
    }


    public function withdraw( $amount){
        if ($amount > 0 && $this->balance >= $amount) {
            $this->balance -= $amount;
            echo "U heeft $$amount opgenomen. Uw huidige saldo is $" . number_format($this->balance, decimals: 2) . "<br>";
        } else {
            echo "U heeft onvoldoende saldo om $$amount op te nemen<br>";
        }
    }
}

$account = new BankAccount("123456", 50.00);


echo "Uw bankaccount nummer is: " . $account->getAccountNumber() . "<br>";
echo "Uw huidige saldo is: \$" . number_format($account->getBalance(), decimals: 2) . "<br>";


$account->withdraw(15.00);


$account->deposit(20.00);


$account->withdraw(100.00);

$account->setAccountNumber("98765");
echo "Uw bankaccount nummer is gewijzigd in: " . $account->getAccountNumber() . "<br>";

?>