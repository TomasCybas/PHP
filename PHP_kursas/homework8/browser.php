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