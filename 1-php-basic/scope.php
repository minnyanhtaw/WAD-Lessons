<?php

$x = "xxx";
const MY_NAME = "Min Nyan Htaw";

function run()
{
    // global $x;
    // echo $x;
    // echo MY_NAME;
    // $y = "yyy";
    // echo $y;

    static $z = 5;
    echo $z;
    $z++;
}

run();
run();
run();

// echo $y;
