<?php

require_once 'BankAccount.php';
class Bank
{
    public array $customers = [];

    public function addCustomer(BankAccount $customer) : void
    {
        $this->customers[] = $customer;
    }

    public function getCustomer() :string
    {
        if(empty($this->customers)){
            return "Geen klanten womp womp";
        }
        $info = "lijst van klanten: <br>";
        foreach($this->customers as $customer){
            $info .= "klant : {$customer->name} Accountnumber : {$customer->number} Balance {$customer->balance}<br>";
        }
        return $info;
    }
}