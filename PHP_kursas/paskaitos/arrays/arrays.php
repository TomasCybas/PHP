<?php

$spalvos = array('BlanchedAlmond', 'CadetBlue', 'BurlyWood',
    'DarkOliveGreen', 'HotPink', 'PapayaWhip');
echo "<table>";
foreach ($spalvos as $spalva) {
    echo "<tr><td style='background-color:$spalva'>$spalva</td></tr>";
}
echo "</table>";

