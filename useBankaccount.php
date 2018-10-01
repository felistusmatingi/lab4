<?php
require_once 'Bankaccount.php';
$b  = new Bankaccount(1234567, 'matingi', 2000) ;
$b ->setAccountNumber( 2222222222);
$b ->setCustomerName( 'Felistus');
$b ->setBalance( 2000);
$display = $b ->displayBankaccount();
echo $display;
