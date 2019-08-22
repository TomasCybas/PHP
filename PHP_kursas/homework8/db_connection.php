<?php
function openCon() {
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "admin";
    $dbname = "testdatabase";

    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die("Connect failed: %s\n".$conn -> error);

    return $conn;
}

function closeCon($conn) {
    $conn -> close();
}
