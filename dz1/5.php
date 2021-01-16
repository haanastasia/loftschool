<?php
// пятое задание
$bmw = array("model" => "X5", "speed" => 120, "doors" => 5, "year" => "2015");
$toyota = array("model" => "Camry", "speed" => 210, "doors" => 4, "year" => "2020");
$opel = array("model" => "Grandland X", "speed" => 150, "doors" => 4, "year" => "2020");

$cars = array('bmw' => $bmw, 'toyota' => $toyota, 'opel' => $opel);

foreach ($cars as $key => $value) {
    echo 'CAR ' . $key . '<br>';
    echo $value['model'] . ' ' . $value['speed'] . ' ' . $value['doors'] . ' ' . $value['year'] . '<br><br>';
}
