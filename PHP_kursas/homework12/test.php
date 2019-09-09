<?php

require_once "Classes/DB_MySQL.php";
require_once "Classes/Company.php";
require_once "Classes/Customer.php";
require_once "Classes/Conversation.php";


$company = new Company("123456" );

echo $company->name."<br>";


$testCustomer = new Customer('5', 'Testas', 'Testauskas');

echo $testCustomer->getCompany()->companyName."<br>";


$conversations = $testCustomer->getConversations();

foreach ($conversations as $conversation) {
    echo $conversation->conversation. "<br>";
}





