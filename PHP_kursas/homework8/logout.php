<?php
session_start();
if(isset($_COOKIE["isLoggedIn"])){
    setcookie("isLoggedIn", "", time()-7000000);
}
if(isset($_COOKIE["user"])){
    setcookie("user", "", time()-7000000);
}
session_unset();
session_destroy();
header("Location: login.php");
