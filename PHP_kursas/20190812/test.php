<?php
    while(0):
    endwhile;


    if (isset($_POST["x"]) && isset($_POST["y"])){
        $x = (int)$_POST["x"];
        $y = (int)$_POST["y"];
    }else {
        $x = 0;
        $y = 0;
    }



?>
<!doctype html>
<html lang="en" xmlns:https="http://www.w3.org/1999/xhtml">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Testas
                </div>
                <div class="card-body">
                    <h5 class="card-title">Jūsų skaičius</h5>
                    <p class="card-text"><?php echo $x + $y ?></p>
                </div>
            </div>

        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Forma
                </div>
                <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label  for="exampleInputEmail1">Įveskite skaičius</label>
                                <input name="x" type="number" class="form-control" placeholder="Pirmas skaičius" value = "<?= $x?>">
                                <input name="y" type="number" class="form-control" placeholder="Pirmas skaičius" value = "<?= $y?>">
                            </div>
                            <button type="submit" class="btn btn-primary">Pateikti</button>
                        </form>

                </div>
            </div>

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

