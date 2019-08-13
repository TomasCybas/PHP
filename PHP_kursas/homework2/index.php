<?php
if (isset($_GET["jonas_points"]) && ($_GET["petras_points"])) {
    $jonas_points = $_GET["jonas_points"];
    $petras_points = $_GET["petras_points"];
    if ($petras_points > $jonas_points) {
        $winner = "Petras";
    }else {
        if($petras_points < $jonas_points){
            $winner = "Jonas";
        }else {
            $winner = "Lygiosios";
        }
    }
}else {
    $winner = "";
}


?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">

    <title>Užduotys</title>
</head>
<body>
<div class="container-fluid bg-light pb-5">
    <header class="container">
        <?php
        include_once "navbar.php"
        ?>
    </header>
    <section class="container">
        <div class="row">
            <div class="col-4">
                <form action="index.php" method="get" class="px-4">
                    <div class="form-group">
                        <label for="jonas">Jono taškai</label>
                        <input name="jonas_points" type="number" class="form-control" id="jonas" required
                               placeholder= "Įveskite Jono surinktus taškus" value="<?= $jonas_points ?>">
                    </div>
                    <div class="form-group">
                        <label for="petras">Petro taškai</label>
                        <input name="petras_points" type="number" class="form-control" id="petras" required
                               placeholder= "Įveskite Petro surinktus taškus" value="<?= $petras_points ?>">
                    </div>
                    <button type="submit" class=" btn btn-success">Pateikti</button>
                </form>
            </div>
            <div class="col-3 my-auto <?= ($winner != "") ? "d-block" : "d-none" ?>">
                <h3 class="bg-secondary py-3">
                    <p class="text-white m-auto">
                        Laimėtojas: <br>
                        <?= $winner ?>
                    </p>

                </h3>

            </div>
        </div>
    </section>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>



