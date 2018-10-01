<?php
class Bankaccount
{
    private $AccountNumber;
    private $CustomerName;
    private $Balance;
    function __construct($AccountNumber, $CustomerName, $Balance)
    {
        $this-> setAccountNumber($AccountNumber);
        $this->setCustomerName($CustomerName);
        $this->setBalance ($Balance);
    }

    //return the value
    public function displayBankaccount()
    {

        return "AccountNumber:" . $this->AccountNumber  .
                "CustomerName:" . $this->CustomerName .
                "Balance:" . $this->Balance;

    }
    //SET
    public function setAccountNumber($Value) {
        $this->AccountNumber = $Value;
    }

    public function setCustomerName($Value) {
        $this->CustomerName = $Value;
    }
    public function setBalance($Value) {
        $this->Balance = $Value;
    }

    //GET
    public function getAccountNumber() {

        return $this->AccountNumber;

    }
    public function getBalance() {

        return $this->Balance;

    }
    public function getCustomerName() {

        return $this->CustomerName;

    }

}