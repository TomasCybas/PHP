<?php
if(isset($_GET["path"]) && isset($_GET["ext"])){
    $path = $_GET["path"];
    $ext = $_GET["ext"];
}
else {
    header("Location: http://localhost/PHP/PHP_kursas/homework8/");
}


if ($ext == "text" ){?>
<textarea style="width: 100%" rows="20"><span><?php readfile($_GET["path"]) ?></span></textarea>
<?php } else {
    readfile($path);
}?>
