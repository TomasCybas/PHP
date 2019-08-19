<?php

include_once "country.php";

function sortByCodeAsc($a, $b)
{
    return $a['Code'] <=> $b['Code'];
}
function sortByCodeDes($a, $b)
{
    return $b['Code'] <=> $a['Code'];
}

function sortByPopAsc($a, $b)
{
    return $a['Population'] <=> $b['Population'];
}
function sortByPopDes($a, $b)
{
    return $b['Population'] <=> $a['Population'];
}

function sortByNameAsc($a, $b)
{
    return $a['Name'] <=> $b['Name'];
}

function sortByNameDes($a, $b)
{
    return $b['Name'] <=> $a['Name'];
}

function sortByLifeExpAsc($a, $b)
{
    return $a['LifeExpectancy'] <=> $b['LifeExpectancy'];
}

function sortByLifeExpDes($a, $b)
{
    return $b['LifeExpectancy'] <=> $a['LifeExpectancy'];
}


if (isset($_GET["sort"])) {
    $sort = $_GET["sort"];
} else {
    $sort = "sortByNameAsc";
}
usort($country, $sort);
?>

<!doctype html>
<html lang="en">
<head>
    <title>Countries</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
    <div class="container">
        <div class="card">
            <div class="card-header">
                Šalys
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>
                            <?php if($sort != "sortByCodeAsc"){
                                echo "<a href=http://localhost/PHP/PHP_kursas/paskaitos/test2/index.php?sort=sortByCodeAsc>Kodas</a>";
                            } else {
                                echo "<a href=http://localhost/PHP/PHP_kursas/paskaitos/test2/index.php?sort=sortByCodeDes>Kodas</a>";
                            } ?>
                        </th>
                        <th><a href=http://localhost/PHP/PHP_kursas/paskaitos/test2/index.php?sort=sortByNameAsc>Pavadinimas</a>
                        </th>
                        <th><a href=http://localhost/PHP/PHP_kursas/paskaitos/test2/index.php?sort=sortByPopAsc>Gyventojų
                                skaičius</a></th>
                        <th><a href=http://localhost/PHP/PHP_kursas/paskaitos/test2/index.php?sort=sortByCodeAsc>Gyvenimo
                                trukmė</a></th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($country as $value) { ?>
                        <tr>
                            <td><?php echo $value["Code"] ?></td>
                            <td><?php echo $value["Name"] ?></td>
                            <td><?php echo $value["Population"] ?></td>
                            <td><?php echo $value["LifeExpectancy"] ?></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>

            </div>

        </div>
        <table>

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

