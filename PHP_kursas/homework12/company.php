<?php

use Classes\Company;
use Classes\Customer;

require_once "vendor/autoload.php";


$loader = new \Twig\Loader\FilesystemLoader("templates");
$twig = new \Twig\Environment($loader, ['cache' => false]);

$companyCode = \Classes\DB_MySQL::real_escape_string($_GET['code']);
$company = new Company($companyCode);
$customers = Customer::getCustomers($company->id);
echo $twig->render("company.html.twig", ["company"=>$company, "customers"=>$customers]);