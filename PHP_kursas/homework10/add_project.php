<?php
require_once "db_connect.php";

if(isset($_POST['add_project'])){
    $employee_id = $conn -> real_escape_string($_GET['id']);
    $project_to_add_id = $conn -> real_escape_string($_POST['project_to_add_id']);
    $conn -> query("INSERT INTO employee_projects_xref  (employee_id, project_id) VALUES ('$employee_id', '$project_to_add_id')");
    header("Location: darbuotojas.php?id=$employee_id");
    die();
} else {
    header("Location: statistika.php");
}