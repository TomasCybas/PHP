<?php
$months = array(1 => 'Sausis',
    2 => 'Vasaris',
    3 => 'Kovas',
    4 => 'Balandis',
    5 => 'Gegužė',
    6 => 'Birželis',
    7 => 'Liepa',
    8 => 'Rugpjutis',
    9 => 'Rugsėjis',
    10 => 'Spalis',
    11 => 'Lapkritis',
    12 => 'Gruodis');

$days = array(1 => 31,
    2 => 28,
    3 => 31,
    4 => 30,
    5 => 31,
    6 => 30,
    7 => 31,
    8 => 31,
    9 => 30,
    10 => 31,
    11 => 30,
    12 => 31);

?>


<!doctype html>
<html lang="en">
<head>
    <title>Mėnesiai</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php include_once "navbar.php"?>
<section class="container-fluid bg-light">
    <div class="container">
        <p>
            Metuose yra  <?php
            $count = 0;
            foreach ($days as $dayCount){
                if($dayCount == 31){
                    $count++;
                }
            } echo "<strong>$count</strong>"?>
            mėnesiai, turintys 31 dieną (
            <?php foreach ($days as $month => $dayCount){
                if($dayCount == 31){
                    echo "$months[$month], ";
                }
            } ?>).
        </p>
        <p>
            Metuose yra  <?php
            $count = 0;
            foreach ($days as $dayCount){
                if($dayCount == 30){
                    $count++;
                }
            } echo "<strong>$count</strong>"?>
            mėnesiai, turintys 30 dienų (
            <?php foreach ($days as $month => $dayCount){
                if($dayCount == 30){
                    echo "$months[$month], ";
                }
            } ?>).
        </p>
        <p>
            Metuose yra  <?php
            $count = 0;
            foreach ($days as $dayCount){
                if($dayCount == 28){
                    $count++;
                }
            } echo "<strong>$count</strong>"?>
            mėnuo, turintys 28 dienas (
            <?php foreach ($days as $month => $dayCount){
                if($dayCount == 28){
                    echo "$months[$month], ";
                }
            } ?>).
        </p>
        <p>
            Viso metuose yra <strong><?php echo array_sum($days) ?></strong> dienos.

        </p>
        <p>
            <?php foreach ($months as $key => $value) {
            echo "<strong>$value</strong> yra <strong>$key</strong> mėnuo jis turi <strong>$days[$key]</strong> d. <br>";
            }?>
        </p>
    </div>

</section>

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
