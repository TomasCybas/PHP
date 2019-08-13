<?php
if (isset($_GET["hours"]) && isset($_GET["minutes"]) && isset($_GET["seconds"])){
    $hours = $_GET["hours"];
    $minutes = $_GET["minutes"];
    $seconds = $_GET["seconds"];
    $submit = $_GET["submit"];
    $seconds++;
    if($seconds == 60 ){
        $seconds = 0;
        $minutes++;
        if($minutes == 60){
            $minutes = 0;
            $hours++;
            if($hours == 24){
                $hours = 0;
                $time = $hours.":".$minutes.":".$seconds;
            }
        }
    }else {
        $time = $hours.":".$minutes.":".$seconds;
    }
} else{
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



    <title>Time</title>
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
                <form action="time.php" method="get" class="px-4">
                    <div class="form-group">
                        <label for="hours">Valandos</label>
                        <input name="hours" type="number" class="form-control" id="hours" required
                               placeholder= "Įveskite valandas" value="">
                    </div>
                    <div class="form-group">
                        <label for="minutes">Minutės</label>
                        <input name="minutes" type="number" class="form-control" id="minutes" required
                               placeholder= "Įveskite minutes" value="" >
                    </div>
                    <div class="form-group">
                        <label for="seconds">Sekundės</label>
                        <input name="seconds" type="number" class="form-control" id="seconds" required
                               placeholder= "Įveskite sekundes" value="">
                    </div>
                    <button name="submit" value="true" type="submit" class=" btn btn-success">Skaičiuoti</button>
                </form>
            </div>
            <div class="col-3 my-auto <?= ($submit != "") ? "d-block" : "d-none" ?> ">
                <p class="m-auto">
                    Po vienos sekundės bus: <?=$time?>
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
