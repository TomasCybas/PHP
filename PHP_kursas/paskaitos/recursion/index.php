<?php

function fakt($x){
    if($x==1) return $x;
    else return ($x) *fakt($x-1);
}
function printDir($path)
{
    $res = opendir($path);
    echo "<ul>";
    while ($item = readdir($res)) {
        if ($item == '.' || $item == "..") continue;
        echo "<li>";
        echo $item;
        if (is_dir($path . "/" . $item)) {
            echo "[dir]";
            printDir($path."/".$item);
        }
        if (is_file($path."/".$item)) {
            echo " [file]";
            $ext = pathinfo($path."/".$item, PATHINFO_EXTENSION);
            if($ext == "txt"){
                echo "<a href ='editor.php?path=$path/$item' target='_blank'>[EDIT]</a>";
            }
        }
        echo "<br>";
        echo "</li>";
    }
    echo "</ul>";
    closedir($res);
}

printDir("C:/xampp");

