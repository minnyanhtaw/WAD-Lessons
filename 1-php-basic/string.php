<?php

// $name = "My name\n";
// $weight = "100 kg\n";

// echo $name;
// echo $weight;

// $myName = "Min Nyan Htaw";

// echo "My name is $myName";

// $x = null;
// echo $x;

// echo true;

// $arr = array("a", "b", "c");
// $x = ["x", "y", "z"];

// // echo $arr;
// print_r($arr);
// echo $arr[0];
// echo $arr[1];
// echo $arr[2];

$myName = "min nyan htaw";
$text = "   abcdefgh   ";

echo md5("aadfjadsjf");

echo password_hash("minnyanhtaw",PASSWORD_BCRYPT);
echo password_hash("minnyanhtaw",PASSWORD_ARGON2I);
echo password_hash("minnyanhtaw",PASSWORD_DEFAULT);


// print_r(explode(" ", $myName));
echo implode("",["a","b","c"]);
echo "\n";
echo strlen(trim($text));
echo "\n";
echo substr($myName, 4, 5);
echo "\n";
echo str_pad($text, 3, "XXX", STR_PAD_RIGHT);
echo "\n";
echo strlen($myName);
echo "\n";
echo str_word_count($myName);
echo "\n";
echo strtolower($myName);
echo "\n";
echo strtoupper($myName);
echo "\n";
echo ucfirst($myName);
echo "\n";
echo ucwords($myName);
echo "\n";
echo strrev($myName);
echo "\n";
echo strrpos($myName, "nyan");
echo "\n";
echo str_replace("nyan", "zaw", $myName);
echo "\n";
