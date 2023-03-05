<?php
require __DIR__.'/vendor/autoload.php';
use src\Main;

$width = 10;
$height = 10;
$structure = new Main($width, $height);
$matrix = $structure->structureInit();
for ($i = 0; $i < $height; $i++) {
    for ($j = 0; $j < $width; $j++) {
        echo $matrix[$i][$j].' ';
    }
    echo "</br>";
}
