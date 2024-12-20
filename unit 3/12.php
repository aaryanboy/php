<?php
class InsufficientFundsException extends Exception {}
class BankAccount {
    protected $accountNumber;
    protected $totalBalance;
    public function __construct($accountNumber, $initialBalance = 0) {
        $this->accountNumber = $accountNumber;
        $this->totalBalance = $initialBalance;
    }
    public function deposit($amount) {
        if ($amount > 0) {
            $this->totalBalance += $amount;
            return true;
        }
        return false;
    }
    public function withdraw($amount) {
        if ($amount > $this->totalBalance) {
            throw new InsufficientFundsException("Insufficient funds: Cannot withdraw $amount. Current balance: {$this->totalBalance}");
        }
        $this->totalBalance -= $amount;
        return true;
    }
    public function getBalance() {
        return $this->totalBalance;
    }
}
class SavingAccount extends BankAccount {
    private $interestRate;
    public function __construct($accountNumber, $initialBalance = 0, $interestRate = 0.05) {
        parent::__construct($accountNumber, $initialBalance);
        $this->interestRate = $interestRate;
    }
    
    public function addInterest() {
        $interest = $this->totalBalance * $this->interestRate;
        $this->deposit($interest);
        return $interest;
    }
}
try {
    $savings = new SavingAccount("SA001", 1000);
    $savings->deposit(500);
    echo $savings->getBalance() . "<br>";
    $savings->withdraw(2000);
} catch (InsufficientFundsException $e) {
    echo $e->getMessage() . "<br>";
}
?>