<?php
require_once "DB_MySQL.php";
require_once "Model/Country.php";
require_once  "Model/City.php";




$lietuva =new Country('LTU');
echo "Lietuvoje yra ". sizeof($lietuva->getCities()) . " miestai";



