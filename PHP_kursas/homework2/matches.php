<?php
if(isset($_GET["matches"])){
    $matches = $_GET["matches"];
}else{
    $matches = 0;
}
$price = 0.28;
$sum = $matches * $price;
if($sum > 1000){
    $discount = 0.03;
    if($sum > 2000){
        $discount = 0.04;
    }
}else {
    $discount = 0;
}
$total = $sum - ($sum * $discount);


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


    <title>Matches</title>
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
                <form action="matches.php" method="get" class="px-4">
                    <div class="form-group">
                        <label for="matches">Degtukų dėžučių kiekis</label>
                        <input name="matches" type="number" class="form-control" id="matches" required
                               placeholder= "Įveskite perkamų degtukų dėžučių kiekį" value="">
                    </div>
                    <button type="submit" class=" btn btn-success">Skaičiuoti</button>
                </form>
            </div>
            <div class="col-3 my-auto">
                <p class="m-auto">
                    Užsakymo suma: <?=$total?>
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
