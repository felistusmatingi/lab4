<?php
require_once 'Bankaccount.php';
$b  = new Bankaccount() ;
$b ->setAccountNumber( 123456);
$b ->setCustomerName( 'Felistus');
$b ->setBalance( 2000);
$display = $b ->displayaccount();
echo $display;
