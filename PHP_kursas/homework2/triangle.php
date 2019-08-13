<?php
if (isset($_GET["a"]) && isset($_GET["b"]) && isset($_GET["c"])){
    $a = $_GET["a"];
    $b = $_GET["b"];
    $c = $_GET["c"];
    $submit = $_GET["submit"];
}
else{
    $submit = "";
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


    <title>Triangle</title>
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
                <form action="triangle.php" method="get" class="px-4">
                    <div class="form-group">
                        <label for="a">Kraštinė a</label>
                        <input name="a" type="number" class="form-control" id="a" required
                               placeholder= "Įveskite kraštinės a ilgį" value="<?= $a?>">
                    </div>
                    <div class="form-group">
                        <label for="b">Krašitnė b</label>
                        <input name="b" type="number" class="form-control" id="b" required
                               placeholder= "Įveskite kraštinės b ilgį" value="<?= $b?>" >
                    </div>
                    <div class="form-group">
                        <label for="c">Kraštinė c</label>
                        <input name="c" type="number" class="form-control" id="c" required
                               placeholder= "Įveskite kraštinės c ilgį" value="<?= $c?>">
                    </div>
                    <button name="submit" value="true" type="submit" class=" btn btn-success">Skaičiuoti</button>
                </form>
            </div>
            <div class="col-3 my-auto <?= ($submit != "") ? "d-block" : "d-none" ?>">
                    <p class="m-auto">
                        <?=($a + $b > $c && $b + $c > $a && $a + $c > $b) ? "Trikampis įmanomas" : "Trikampis negalimas"?>
                    </p>
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
