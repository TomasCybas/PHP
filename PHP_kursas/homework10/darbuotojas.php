<?php
require_once "db_connect.php";
$employee_id = $conn -> real_escape_string($_GET['id']);
$employee = $conn -> query(
        "SELECT employees.*,  positions.name as position_name
                FROM employees 
                LEFT JOIN positions ON employees.position_id = positions.id
                WHERE employees.id = '$employee_id'")
        -> fetch_assoc();
$projects = $conn -> query(
        "SELECT employee_projects_xref.project_id, projects.* 
        FROM employee_projects_xref     
        LEFT JOIN projects ON employee_projects_xref.project_id = projects.id 
        WHERE employee_id = '$employee_id'")
        -> fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Baltic Talents</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        .curr {
            text-align: right;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed"
                    data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                    aria-expanded="false">
                <span class="sr-only">Toggle navigation</span> <span
                        class="icon-bar"></span> <span class="icon-bar"></span> <span
                        class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Baltic Talents</a>
        </div>
        <div class="collapse navbar-collapse"
             id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="statistika.php">Įmonės statistika</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container" id="content" tabindex="-1">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h1><?= $employee['name']. " ". $employee['surname']?></h1>

            </div>
        </div>
        <div class="col-md-6">
            <p class="text-capitalize">
                <b>Pareigos: <?= $employee['position_name']?></b> <br/>
                <button class="btn btn-primary">Keisti pareigas</button>
            </p>
            <p>
                <b>Mėnesinė alga: </b> <br/> <?=$employee['salary']/100 ." €"?>
            </p>
        </div>
        <div class="col-md-6">
            <p>
                <b>Telefonas: </b> <br/> <?=$employee['phone']?>
            </p>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-6">
            <div class="panel panel-primary">
                <!-- Default panel contents -->
                <div class="panel-heading">Mokesčiai</div>
                <table class="table  table-hover">
                    <tr>
                        <td>Priskaičiuotas atlyginimas „ant popieriaus“:</td>
                        <td class="curr">500.00 EUR</td>
                    </tr>
                    <tr>
                        <td>Pritaikytas NPD</td>
                        <td class="curr">149.00 EUR</td>
                    </tr>
                    <tr>
                        <td>Pajamų mokestis 15 %</td>
                        <td class="curr">52.65 EUR</td>
                    </tr>
                    <tr>
                        <td>Sodra. Sveikatos draudimas 6 %</td>
                        <td class="curr">30 EUR</td>
                    </tr>
                    <tr>
                        <td>Sodra. Pensijų ir soc. draudimas 3 %</td>
                        <td class="curr">15 EUR</td>
                    </tr>
                    <tr class="info">
                        <td>Išmokamas atlyginimas „į rankas“:</td>
                        <td class="curr"><b>402.35 EUR</b></td>
                    </tr>
                    <tr>
                        <td colspan="2"><b>Darbo vietos kaina</b></td>
                    </tr>
                    <tr>
                        <td>Sodra 30.98 %:</td>
                        <td class="curr">154.90 EUR</td>
                    </tr>
                    <tr>
                        <td>Įmokos į garantinį fondą 0.2 % :</td>
                        <td class="curr">1.00 EUR</td>
                    </tr>
                    <tr class="info">
                        <td>Visa darbo vietos kaina :</td>
                        <td class="curr"><b>655.90 EUR</b></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="col-md-6">
            <table class="table">
                <tr>
                    <th>Projektai</th>
                </tr>
                <?php foreach ($projects as $project) { ?>
                <tr>
                    <td><?=$project['name']?></td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>

<script
        src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>