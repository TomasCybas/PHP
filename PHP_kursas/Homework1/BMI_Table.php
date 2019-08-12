<?php
if (isset($_GET["height"]) && isset($_GET["weight"])) {
    $height = (int)$_GET["height"];
    $weight = (int)$_GET["weight"];
} else {
    $height = 0;
    $height = 0;
}
$bmi = round($weight / pow($height / 100, 2), 2)
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

    <title>Rezultatas</title>
</head>
<style>
    .selected {
        background-color: #38685d;
        color: white;
    }
</style>
<body>
<div class="container py-5">
    <div class="row">
        <div class="col-3">
            <h2>
                Jūsų Kūno Masės indeksas: <span class="text-info"><?= $bmi ?></span>
            </h2>
        </div>
        <div class="col-9">
            <table class="table">
                <tr>
                    <td class= "<?=(18.5 < $bmi && $bmi < 25 ? "selected" : "")?>">
                        <p>
                            Normalus svoris <br>
                            <strong>KMI reikšmė: </strong> 18.5 - 25 <br>
                            <strong>Ligų rizika: </strong> <br>
                            Nėra
                        </p>
                    </td>
                </tr>
                <tr>
                    <td class= "<?=(25 < $bmi && $bmi < 30 ? "selected" : "")?>">
                        <p>
                            Antsvoris <br>
                            <strong>KMI reikšmė: </strong> 25 - 30 <br>
                            <strong>Ligų rizika: </strong> <br>
                            Nedidelė, stengtis, kad nedidėtų
                        </p>
                    </td>
                </tr>
                <tr>
                    <td class= "<?=(30 < $bmi && $bmi < 35 ? "selected" : "")?>">
                        <p>
                            I-o lygio nutukimas <br>
                            <strong>KMI reikšmė: </strong> 30 - 35 <br>
                            <strong>Ligų rizika: </strong> <br>
                            Padidėjusi, būtina mažinti svorį
                        </p>
                    </td>
                </tr>
                <tr>
                    <td class= "<?=(35 < $bmi && $bmi < 40 ? "selected" : "")?>">
                        <p>
                            II-o lygio nutukimas <br>
                            <strong>KMI reikšmė: </strong> 35 - 40 <br>
                            <strong>Ligų rizika: </strong> <br>
                            Didelė, būtina mažinti svorį
                        </p>
                    </td>
                </tr>
                <tr>
                    <td class= "<?=(40 < $bmi && $bmi < 99 ? "selected" : "")?>">
                        <p>
                            III-o lygio (liguistas) nutukimas <br>
                            <strong>KMI reikšmė: </strong> 40 - 99 <br>
                            <strong>Ligų rizika: </strong> <br>
                            Labai didelė, būtina mažinti svorį
                        </p>
                    </td>
                </tr>
            </table>
            <form action="index.php">
                <button type="submit" class="btn btn-primary">
                    Grįžti į skaičiuoklę
                </button>
            </form>



        </div>

    </div>

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
