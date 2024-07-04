<?php

// $weight = (int)153.42;
// $weight = (string)153.42;

// var_dump($weight);
// print($weight);

$car = (object) [
    "id" => 155,
    "model" => "Neta V",
    "brand" => "Neta",
    "type" => "EV"
];

// var_dump($car);
// print($car['model']);
print($car->model);
