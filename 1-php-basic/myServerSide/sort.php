<?php

$x = ["x", "y", "z", "a", "C", 1, 1.5, 2, "+", "-"];
// rsort($x);
// print_r($x);

$asso = [
    "myName" => "Min Nyan Htaw",
    "myAge" => 18,
    "myJob" => "student",
    "gf" => 1,
    "isHandsome" => "yes"
];

// asort($asso);
krsort($asso);

print_r($asso);
