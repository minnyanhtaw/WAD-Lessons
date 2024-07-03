<?php

// $asso = array(
//     "myName" => "Min Nyan Htaw",
//     "myAge" => 18,
//     "myJob" => "student",
//     "gf" => null,
//     "isHandsome" => true
// );

// $asso = [
//     "myName" => "Min Nyan Htaw",
//     "myAge" => 18,
//     "myJob" => "student",
//     "gf" => null,
//     "isHandsome" => true
// ];

// echo array_search("Min Nyan Htaw", $asso);
// echo array_key_exists("gf", $asso);

// print_r(array_keys($asso));
// print_r(array_values($asso));

// print_r($asso);
// print($asso["myName"]);
// print($asso["myAge"]);

// index array 
// $arr = [];
// $arr[0] = "a";
// $arr[2] = "b";
// $arr[3] = "c";
// $x = ["a", "b", "c"];

// echo array_pop($x);
// print_r($x);

// echo array_push($x, "d");
// print_r($x);

// echo array_shift($x);
// print_r($x);

// echo array_unshift($x, "t");
// print_r($x);


// print_r($arr);

// assoc 
// $assoc = array(
//     "name" => "Min Nyan Htaw",
//     "age" => 14,
// );

// print_r($assoc);

// system("cls");

// shell_exec('cls');

// $arr = ["a", "b", "c", "e", "c", "d", "e", "f"];

// print_r(explode(" ", "san kyi tar"));
// print_r(implode("____", $arr));

// $r = array_unique($arr);
// print_r($r);

// shuffle($arr);
// $r = array_reverse($arr);
// print_r($r);
// echo "\n";


// print_r($arr);


// print_r(range(5,100,5));

// $info = ['apple', 'banana', 'orange'];
// list($x, $y, $z) = $info;

// echo $x;
// echo "\n";

// echo $y;
// echo "\n";




// echo in_array("z", $arr);

// echo current($arr);
// echo "\n";
// echo end($arr);
// echo "\n";

// $r = array_slice($arr, 1, 3);

// $r = array_splice($arr, 1, 4);

// print_r($r);

// print_r($arr);


// print_r(array_rand($arr, 2));

// foreach (array_rand($arr, 3) as $i) {
//     echo $arr[$i];
//     echo "\n";
// }

// echo $arr[array_rand($arr, 1)];
// echo "\n";

// echo $arr[array_rand($arr, 1)];
// echo "\n";

// echo $arr[array_rand($arr, 1)];
// echo "\n";

// echo $arr[array_rand($arr, 1)];
// echo "\n";

// $nums = [1, 2, 3, 7, 35];

// $r = array_map(fn ($el) => $el * 2, $nums);

// $r = array_filter($nums, fn($el) => $el < 5);

// $r = array_reduce($nums, fn ($pv, $cv) => $pv + $cv, 0);

// print_r($nums);
// print_r($r);

$json = file_get_contents('https://jsonplaceholder.typicode.com/todos/1');
echo $json;
