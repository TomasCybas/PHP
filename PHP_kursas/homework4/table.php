<?php
$difficulty = $_GET["difficulty"];
$numberSet = $_GET["number_set"];
srand((int)$_GET["seed"]);

?>

<!doctype html>
<html lang="en">
<head>
    <title>Table</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
          integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
    <div class="container py-5">
        <table class="table text-center table-bordered">
            <tbody>
            <?php for ($i = 0; $i <= $numberSet; $i++) { ?>
            <tr>
                <?php for ($j = 0; $j <= $numberSet; $j++){ ?>
                    <td <?php echo ($i == 0 || $j == 0)? "class= 'head font-weight-bold'":"" ?> >
                        <?php
                            if($i == 0) {
                                if($j == 0) {
                                    echo "<i class='far fa-smile'></i>";
                                }else {
                                    echo $j;
                                }
                            } elseif ($j == 0) {
                                echo $i;
                            } else {
                                if( rand(1, 100) > $difficulty) {
                                    echo $i * $j;
                                }
                            }

                        ?>
                    </td>
                <?php } ?>
            </tr>
           <?php }?>
            </tbody>
        </table>

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

