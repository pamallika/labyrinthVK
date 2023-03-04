<?php
header('Content-type: json/application');
require __DIR__.'/vendor/autoload.php';
use src\Main;
$arg = $_GET['ourForm__inp'];

$width = 10;
$height = 10;
$structure = new Main($width, $height);
$matrix = $structure->structureInit();
//for ($i = 0; $i < $height; $i++) {
//    for ($j = 0; $j < $width; $j++) {
//        echo $matrix[$i][$j].' ';
//    }
//    echo "</br>";
//}

echo json_encode($matrix, JSON_FORCE_OBJECT);
