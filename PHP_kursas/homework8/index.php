<?php
session_start();
include_once "browser.php";
if (isset($_SESSION["isLoggedIn"])) {
    $isLoggedIn = $_SESSION["isLoggedIn"];
    $user = $_SESSION["user"];
} else if (isset($_COOKIE["isLoggedIn"])) {
    $isLoggedIn = $_COOKIE["isLoggedIn"];
    $user = $_COOKIE["user"];
} else {
    $isLoggedIn = false;
}
if (!$isLoggedIn) {
    header("Location: login.php");
}

?>


<!doctype html>
<html lang="en">
<head>
    <title>File Explorer</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
          integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
</head>
<style>
    body, html {
        height: 100%
    }

    .container-fluid {
        height: 100%;
        overflow-hidden;
    }

    .top-bar {
        font-size: 13px;
    }

    i {
        color: darkred;
    }

    a {
        text-decoration: none;
        color: black;
    }

    a:hover {
        text-decoration: none;
        color: darkred;
    }

    .logout {
        color: darkred;
    }
</style>
<body>
<header class="bg-light">
    <div class="container">
        <div class="top-bar float-right p-2">
            <p class="d-inline-block">Vartotojas: <?php echo $user ?></p>
            <a href="logout.php" class="logout">Atsijungti</a>
        </div>
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="index.php">Failų naršyklė</a>
        </nav>
    </div>

</header>
<div class="container-fluid bg-light">
    <div class="container">
        <div class="py-2">
            <?php printDir($path) ?>
            <br>
            <form method="post" action="upload.php?path=<?php echo $path ?>" enctype="multipart/form-data">
                <input id="choose_file_hidden" class="d-none" type="file" name="file" onchange="updateFileName()">
                <button type="button" onclick="chooseFile(); updateFileName()" id="choose_file" class="btn btn-dark">
                    Pasirinkti failą
                </button>
                <p id="file_name">Pasirinktas failas: </p>
                <button class="btn btn-success" type="submit" name="upload" value="Upload">Įkelti</button>
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
<script>
    function chooseFile() {
        $("#choose_file_hidden").click();
    }

    function updateFileName() {
        var fileName = $("input[type=file]").val().split("\\").pop();
        $("#file_name").html("Pasirinktas failas: " + fileName);
    }
</script>
</body>
</html>
