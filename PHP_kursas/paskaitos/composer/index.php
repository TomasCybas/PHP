<?php
require_once "vendor/autoload.php";


$loader = new \Twig\Loader\FilesystemLoader("templates");
$twig = new \Twig\Environment($loader, ['cache' => false]);


$country = new \Model\Country('LVA');
$countries = \Model\Country::getCountries();


echo $twig->render('index.html.twig', ['name'=>'belekas', 'countries' => $countries]);



