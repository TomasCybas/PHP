<?php

use Classes\Company;

require_once "vendor/autoload.php";


$loader = new \Twig\Loader\FilesystemLoader("templates");
$twig = new \Twig\Environment($loader, ['cache' => false]);





$companies = Company::getCompanies();



echo $twig->render("index.html.twig", ["companies" => $companies]);
