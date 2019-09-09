<?php

require_once "vendor/autoload.php";


$loader = new \Twig\Loader\FilesystemLoader("templates");
$twig = new \Twig\Environment($loader, ['cache' => false]);


$country = new \Model\Country($_GET['code']);



echo $twig->render('country.html', ['country' => $country]);