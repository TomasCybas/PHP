<?php
if(isset($_POST["x"],$_POST["y"], $_POST["submit"])){
    $x = $_POST["x"];
    $y = $_POST["y"];
    $submit = $_POST["submit"];
    $temp = ($x > $y)? $x : $y;
    while (!($temp % $x == 0 && $temp % $y == 0)){
        $temp++;
    }
    $bmk = $temp;
}

?>

<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="row py-5 mx-auto">
    <div class="col-4 p-5 mx-auto bg-light rounded">
        <form action="index.php" method="post">
            <div class="form-group">
                <label for="x">Skaičius X</label>
                <input class="form-control" type="number" id="x" name="x" value="<?php echo $_POST["x"] ?>" placeholder="Įveskite skaičių x" required>
            </div>
            <div class="form-group">
                <label for="y">Skaičius Y</label>
                <input class="form-control" type="number" id="y" name="y" value="<?php echo $_POST["y"] ?>" placeholder="Įveskite skaičių y" required>
            </div>
            <button name="submit" type="submit" class="btn btn-danger" value="true">Skaičiuoti BMK</button>
        </form>
        <div class="<?=(!$submit)?"d-none": "" ?>">
            <br>
            <p>
                Mažiausias bendras skaičių <?php echo "$x ir $y kartotinis: <span class='font-weight-bold text-danger'>$bmk</span>" ?>
            </p>

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
