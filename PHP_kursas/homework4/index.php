<?php


?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Generator</title>
</head>
<body>
<div class="container-fluid">
    <div class="container">
        <form action="table.php?" method="get" class="row py-5">
            <div class="form-group col-4">
                <input class="d-none" type="number" name="seed" value="<?php echo rand(1, 1000)?>">
                <p class="text-success">
                    Skaičių rinkinys
                </p>
                <input type="radio" name="number_set" required value="5"> Nuo 1 iki 5 <br>
                <input type="radio" name="number_set" value="10"> Nuo 1 iki 10 <br>
                <input type="radio" name="number_set" value="12"> Nuo 1 iki 12 <br>
                <input type="radio" name="number_set" value="15"> Nuo 1 iki 15<br>
            </div>
            <div class="form-group col-4">
                <p class="text-success">
                    Sudėtingumas
                </p>
                <input type="radio" name="difficulty" required value="10"> Lengvas <br>
                <input type="radio" name="difficulty" value="30"> Vidutinis <br>
                <input type="radio" name="difficulty" value="50"> Sunkus <br>
                <input type="radio" name="difficulty" value="70"> Sunkiausias<br>
            </div>
            <div class="col-4 my-auto">
                <button type="submit" class="btn btn-primary">Generuoti</button>

            </div>

        </form>

    </div>

</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
