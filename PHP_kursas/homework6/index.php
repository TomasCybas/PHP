<?php
$favColors['BlanchedAlmond'] = '#ffebcd';
$favColors['CadetBlue'] = '#5f9ea0';
$favColors['BurlyWood'] = '#deb887';
$favColors['DarkOliveGreen'] = '#556b2f';
$favColors['HotPink'] = '#ff69b4';
$favColors['Papayawhip'] = '#ffefd5';
?>

<!doctype html>
<html lang="en">
<head>
    <title>Spalvos</title>
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
        <div class="row">
            <table class="table-bordered table col-4">
                <thead>
                <tr>
                    <td>Spalva</td>
                    <td>HEX kodas</td>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($favColors as $color => $hexCode ){
                    echo "<tr style='background-color: $hexCode'>
                                <td>$color</td>
                                <td>$hexCode</td>
                          </tr>";
                } ?>
                </tbody>
            </table>
        </div>
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
