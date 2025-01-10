<?php

class BankAccount{

    public $name;

    public $accountnumber; 

    public $balance;


    public function __construct($name, $accountnumber, $balance){
        $this->name = $name;
        $this->accountnumber = $accountnumber;
        $this->balance = $balance;
    }


    
}