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
// print($car->model);


function area(int $w, int $h): int
{
    return $w * $h;
}

// print(area("a", "b"));
// print(area(4, 5));

// $number = ["a", 4, 5, 6, 4];
$number = [3, 4, 5, 6, 4];


function processArray(array $number): int
{
    return array_sum($number);
}
// print(processArray($number));

function performOperation(int $a, int $b, callable $operations): int
{
    return $operations($a, $b);
}

$additionCallback = function (int $x, int $y): int {
    return $x + $y;
};

print(performOperation(5, 4, $additionCallback));
