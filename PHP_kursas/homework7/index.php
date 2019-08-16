<?php
include_once "skelbimai.php";
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
<body>
<nav class="navbar navbar-expand-sm navbar-light bg-dark">
    <a class="navbar-brand text-white" href="#">Super Skelbimai</a>
</nav>
<div class="container-fluid bg-light">
    <div class="container py-5">
        <div class="row">
            <div class="col-6 mx-auto">
                <?php foreach ($skelbimai as $skelbimas) { ?>
                    <p>
                        <strong>Skelbimo id: <?php echo $skelbimas["id"] ?></strong>
                        <br>
                        <br>
                        <?php echo $skelbimas["text"] ?>
                        <br>
                        <br>
                        <?php if(!$skelbimas["onPay"]=="") { ?>
                            Skelbimas apmokėtas <?php $date = date("Y m d H:i", $skelbimas["onPay"]);  echo $date?>
                        <?php } else{
                            echo "Skelbimas neapmokėtas";
                        } ?>
                    </p>
                    <hr>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<footer class="bg-dark py-2 px-2
    <div class="row">
        <div class="col-3 text-white">
            <p>
                Puslapyje patalpinta <?= count($skelbimai) ?> skelbimų. <br>
                <?php
                $count = 0;
                $paidAmount = 0;
                $amountToBePaid = 0;
                foreach ($skelbimai as $skelbimas) {
                    if(!$skelbimas["onPay"]==""){
                        $count++;
                        $paidAmount+= $skelbimas["cost"];
                    } else {
                        $amountToBePaid+= $skelbimas["cost"];
                    }
                }?>
                Iš jų apmokėta: <?= $count ?> <br>
                Už skelbimus sumokėta: <?= $paidAmount ?> € <br>
                Už skelbimus nesumokėta: <?= $amountToBePaid ?> €
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