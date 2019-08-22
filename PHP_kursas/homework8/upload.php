<?php
session_start();
$path= $_GET["path"];

if(isset($_POST["upload"])){
    var_dump($_FILES);
    print_r($_FILES);
    move_uploaded_file($_FILES['file']["tmp_name"], $path."/".$_FILES["file"]["name"]);
    unset($_POST["upload"]);
    header("Location: index.php?path=".$path);
} else {
    header("Location: index.php");
}


