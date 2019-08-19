<?php
include_once "skelbimai.php";

function sortByDateAsc($a, $b){
    return $a["onPay"] <=> $b["onPay"];
}

function sortByDateDesc($a, $b){
    return $b["onPay"] <=> $a["onPay"];
}

function sortByPriceAsc($a, $b){
    return $a["cost"] <=> $b["cost"];
}

function sortByPriceDesc($a, $b){
    return $b["cost"] <=> $a["cost"];
}

if (isset($_GET["sort"])){
$sort = $_GET["sort"];
    usort($skelbimai, $sort);
}else {
    $sort="";
}



?>

<!doctype html>
<html lang="en">
<head>
    <title>Skelbimai</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
    .small {
        font-size: 12px;
    }
    .sort {
        height: 19px;
    }
    .sort a {
        text-decoration: none;
        color: grey;
        font-size: 13px;
    }
</style>
<body>
<nav class="navbar navbar-expand-sm navbar-light bg-dark">
    <a class="navbar-brand text-white" href="#">Super Skelbimai</a>
</nav>
<div class="container-fluid bg-light">
    <div class="container py-5">
        <div class="row">
            <div class="col-6 mx-auto">
                <p class="text-right sort pb-2">
                    <?php if ($sort == "sortByPriceAsc"){
                        echo "<a href='http://localhost/PHP/PHP_kursas/homework7/index.php?sort=sortByPriceDesc'>Kaina &uarr;</a>";
                     } else if ($sort == "sortByPriceDesc") {
                        echo "<a href='http://localhost/PHP/PHP_kursas/homework7/index.php?sort=sortByPriceAsc'>Kaina &darr;</a>";;
                    } else {
                        echo "<a href='http://localhost/PHP/PHP_kursas/homework7/index.php?sort=sortByPriceAsc'>Kaina &nbsp;</a>";
                    } ?>
                    <?php if ($sort == "sortByDateAsc"){
                        echo "<a href='http://localhost/PHP/PHP_kursas/homework7/index.php?sort=sortByDateDesc'>Data &uarr;</a>";
                    } else if ($sort == "sortByDateDesc") {
                        echo "<a href='http://localhost/PHP/PHP_kursas/homework7/index.php?sort=sortByDateAsc'>Data &darr;</a>";;
                    } else {
                        echo "<a href='http://localhost/PHP/PHP_kursas/homework7/index.php?sort=sortByDateAsc'>Data &nbsp;</a>";
                    } ?>

                </p>
                <ul class="list-group list-group-flush clearfix">
                    <?php foreach ($skelbimai as $skelbimas) { ?>
                        <li class="list-group-item">
                            <p>
                                <strong>Skelbimo id: <?php echo $skelbimas["id"] ?></strong>
                                <br>
                                <br>
                                <?php echo $skelbimas["text"] ?>
                                <br>
                                <br>
                                <?php if (!$skelbimas["onPay"] == "") { ?>
                                    <span class="small">Skelbimo kaina: <?php echo $skelbimas["cost"] / 100 ?>€ Apmokėta <?php $date = date("Y m d H:i", $skelbimas["onPay"]);
                                        echo $date ?></span>
                                <?php } ?>
                            </p>
                        </li>
                    <?php } ?>
                </ul>

            </div>
        </div>
    </div>
</div>
<footer class="bg-dark py-2 px-2"
<div class="row">
    <div class="col-3 text-white">
        <p>
            Puslapyje patalpinta <?= count($skelbimai) ?> skelbimų. <br>
            <?php
            $count = 0;
            $paidAmount = 0;
            $amountToBePaid = 0;
            foreach ($skelbimai as $skelbimas) {
                if (!$skelbimas["onPay"] == "") {
                    $count++;
                    $paidAmount += $skelbimas["cost"];
                } else {
                    $amountToBePaid += $skelbimas["cost"];
                }
            } ?>
            Iš jų apmokėta: <?= $count ?> <br>
            Už skelbimus sumokėta: <?= $paidAmount / 100 ?> € <br>
            Už skelbimus nesumokėta: <?= $amountToBePaid / 100 ?> €
        </p>
    </div>
</div>
</footer>

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