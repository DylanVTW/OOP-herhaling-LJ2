<?php


namespace BankApp;

class BankAccount
{
    public string $accountNumber;
    public string $accountHolder;
    public float $balance;
    protected string $accountType;

    public function __construct(string $accountNumber, string $accountHolder, float $balance, string $accountType)
    {
        $this->accountNumber = $accountNumber;
        $this->accountHolder = $accountHolder;
        $this->balance = $balance;
        $this->accountType = $accountType;  
    }

    public function getAccountNumber(): string
    {
        return $this->accountNumber;
    }

    public function getAccountHolder(): string
    {
        return $this->accountHolder;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }


    /** @param float $amount
     * @return void
     */
    public function deposit(float $amount): void {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }

  /** @param float $amount
     * @return void
     */
    public function withdraw(float $amount): void {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
        }
    }

    protected function validateWithdrawal(float $amount): bool
    {
        return $this->balance - $amount >= 0;
    }

    public function getAccountInfo(): string
    {
        return "Accountnummer: {$this->accountNumber}, Account houder: {$this->accountHolder}, Balans: {$this->balance}, Account type: {$this->accountType}";
    }
}
