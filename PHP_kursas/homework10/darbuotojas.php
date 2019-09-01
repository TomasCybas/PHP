<?php
require_once "db_connect.php";
$employee_id = $conn->real_escape_string($_GET['id']);

// darbuotojo pozicijos atnaujinimas
if(isset($_POST['update_position'])){
    $new_position_id = $conn -> real_escape_string($_POST['new_position_id']);
    $conn -> query("UPDATE employees SET position_id = '$new_position_id' WHERE id = '$employee_id'");
}

$employee = $conn->query(
    "SELECT employees.*,  positions.name as position_name
                FROM employees 
                LEFT JOIN positions ON employees.position_id = positions.id
                WHERE employees.id = '$employee_id'")
    ->fetch_assoc();
$employee_projects = $conn->query(
    "SELECT employee_projects_xref.project_id, projects.* 
        FROM employee_projects_xref     
        LEFT JOIN projects ON employee_projects_xref.project_id = projects.id 
        WHERE employee_id = '$employee_id'")
    ->fetch_all(MYSQLI_ASSOC);
$positions = $conn->query("SELECT * FROM positions")->fetch_all(MYSQLI_ASSOC);
$projects = $conn -> query("SELECT * FROM projects") -> fetch_all(MYSQLI_ASSOC);
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
        .custom-select {
            height: 100%;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <a class="navbar-brand" href="#">Baltic Talents</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="statistika.php">Įmonės statistika</a>
            </li>
        </ul>
    </div>
</nav>


<div class="container" id="content" tabindex="-1">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h1><?= $employee['name'] . " " . $employee['surname'] ?></h1>

            </div>
        </div>
        <div class="col-md-6">
            <p class="text-capitalize">
                <b>Pareigos: <?= $employee['position_name'] ?></b> <br/>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#position_update_modal">
                    Keisti pareigas
                </button>
                <!-- Modal -->
            <div class="modal fade" id="position_update_modal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="darbuotojas.php?id=<?= $employee_id ?>">
                                <select name="new_position_id" class="custom-select text-capitalize">
                                    <option selected>Pasirinkite iš sąrašo</option>
                                    <?php
                                    foreach ($positions as $position) { ?>
                                        <option class="py-2 text-capitalize" value=<?= $position['id']?>><?= $position['name'] ?></option>;
                                        <?php } ?>
                                </select>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Atšaukti</button>
                                    <button type="submit" class="btn btn-success" name="update_position" value="1">Išsaugoti pasirinkimą</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </p>
            <p>
                <b>Mėnesinė alga: </b> <br/> <?= $employee['salary'] / 100 . " €" ?>
            </p>
        </div>
        <div class="col-md-6">
            <p>
                <b>Telefonas: </b> <br/> <?= $employee['phone'] ?>
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
            <div class="panel panel-primary">
                <div class="panel-heading"> Projektai</div>
                <table class="table">
                    <?php if (!empty($employee_projects)) {
                        foreach ($employee_projects as $employee_project) { ?>
                            <tr>
                                <td><?= $employee_project['name'] ?></td>
                            </tr>
                        <?php } ?>
                    <?php } else {
                        echo "<tr> <td>Šiuo metu darbuotojas projektų neturi</td></tr>";
                    } ?>
                </table>
            </div>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#project_modal">
                Priskirti projektą
            </button>
            <!-- Modal -->
            <div class="modal fade" id="project_modal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="add_project.php?id=<?= $employee_id ?>">
                                <select name="project_to_add_id" class="custom-select text-capitalize">
                                    <option selected>Pasirinkite iš sąrašo</option>
                                    <?php
                                    foreach ($projects as $project) { ?>
                                        <option class="py-2 text-capitalize" value=<?=$project['id']?>><?= $project['name'] ?></option>;
                                        <?php } ?>
                                </select>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Atšaukti</button>
                                    <button type="submit" class="btn btn-success" name="add_project" value="1">Išsaugoti pasirinkimą</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script
        src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>