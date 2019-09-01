<?php
require_once "db_connect.php";
$position_id = $conn -> real_escape_string($_GET['id']);
$employees = $conn -> query("SELECT * FROM employees WHERE position_id = '$position_id'")
            -> fetch_all(MYSQLI_ASSOC);
$positions = $conn -> query("SELECT * FROM positions") -> fetch_all(MYSQLI_ASSOC);
$position = $conn -> query("SELECT * FROM positions WHERE id = '$position_id'") -> fetch_assoc();
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
td {
	vertical-align: middle !important;
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
					<h1>Darbuotojai pagal pareigas: <strong class="text-capitalize"><?= $position['name']?></strong> </h1>
				</div>
			</div>
			<div class="col-md-12">
				<div class="panel panel-primary">
					<!-- Default panel contents -->
					<div class="panel-heading">Darbuotojų sąrašas</div>
					<!-- Table -->
					<table class="table">
						<tr>
							<th></th>
							<th>Vardas</th>
							<th>Pavardė</th>
							<th>Tel. nr.</th>
							<th>Išsilavinimas</th>
							<th>Alga</th>
							<th></th>
						</tr>
                        <?php foreach ($employees as $employee) { ?>
						<tr>
							<td><strong><?= $employee['id']?></strong></td>
							<td><?= $employee['name']?></td>
							<td><?= $employee['surname']?></td>
							<td><?= $employee['phone']?></td>
							<td><?= $employee['education']?></td>
							<td><?= $employee['salary']/100 ." €"?></td>
							<td><a href="darbuotojas.php?id=<?=$employee['id']?>" class="btn btn-primary">Plačiau</a></td>
						</tr>
                        <?php } ?>
					</table>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-primary">
					<!-- Default panel contents -->
					<div class="panel-heading">Baziniai darbo užmokesčiai:</div>
					<!-- Table -->
					<table class="table">
						<tr>
							<th>Pareigos</th>
							<th>Bazinis darbo užmokestis</th>
							<th></th>
						</tr>

                        <?php foreach ($positions as $position) { ?>
                            <tr>
                                <td class="text-capitalize"><?= $position['name'] ?></td>
                                <td><?= $position['base_salary']/100 ." €" ?></td>
                                <td><a href="darbuotojai_pareigos.php?id=<?= $position['id']?>" class="btn btn-primary text-capitalize">Rodyti darbuotojus</a></td>
                            </tr>
                        <?php } ?>
					</table>
				</div>
			</div>
			
		</div>


	</div>
	<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>