<?php
$conn = new mysqli('localhost', "root", "", "paskaitos" );
$conn -> set_charset('utf8');

$result = $conn-> query('SELECT * FROM dalykai');





foreach ($result -> fetch_all(MYSQLI_ASSOC) as $dalykas){
    echo $dalykas['pavadinimas']."<br>";
}