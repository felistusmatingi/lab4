<?php
class Bankaccount
{
    private $AccountNumber;
    private $CustomerName;
    private $Balance;

    function __construct($AccountNumber,$CustomerName,$Balance)
    {
        $this-> setAccountNumber($AccountNumber);
        $this->setBalance ($Balance);
        $this->setCustomerName($CustomerName);
    }
    public function setAccountNumber($NewValue) {

        $this->AccountNumber = $NewValue;

    }
    public function setCustomerName($NewValue) {

        $this->CustomerName = $NewValue;

    }

    public function setBalance($NewValue) {

        $this->Balance = $NewValue;

    }
    public function getAccountNumber() {

        return $this->AccountNumber;

    }
    public function getBalance() {

        return $this->Balance;

    }
    public function getCustomerName() {

        return $this->CustomerName;

    }
    //return the value
    public function displayaccount()
    {

        return "AccountNumber:" . $this->AccountNumber ;
        return "CustomerName:" . $this->CustomerName;
        return "Balance:" . $this->Balance;

    }
}