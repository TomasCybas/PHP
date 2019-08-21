<?php
$startPath = "../../../Final_Project";
if(isset($_GET["path"])){
    $path = $_GET["path"];
} else {
    $path = $startPath;
}


function printDir($path){
    global $startPath;
    $dh = opendir($path);
    echo "<ul class='fa-ul'>";
    if($path != $startPath){
        $prevPath = dirname($path, 1);
        echo "<li><span class='fa-li'></span><i class='fas fa-folder-open'></i><a href='index.php?path=$prevPath'>ATGAL</a></li>";
    }
    while($item = readdir($dh)){
        if($item == "." || $item == "..") continue;
        echo "<li>";
        if(is_dir($path."/".$item)){
            echo "<span class='fa-li'><i class='far fa-folder'></i></span>";
            echo "<a href='index.php?path=$path/$item'>$item</a>";
        }
        if(is_file($path."/".$item)){
            $ext = pathinfo($path."/".$item, PATHINFO_EXTENSION);
            echo "<span class='fa-li'><i class='far fa-file'></i></span>";
            echo "<a target='_blank' href='$path/$item'>$item</a>";
        }
        echo "</li>";
    }
    echo "</ul>";
    closedir($dh);
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
    body {
        min-height: 100%;
    }
</style>
<body>

<div class="container-fluid bg-light">
    <div class="container">
        <?php printDir($path)?>
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
