<?php

// touch("myName.txt");
// mkdir("mytest");

// var_dump(is_file("myName.txt"));
// var_dump(is_file("mytest"));
// var_dump(is_dir("mytest"));
// var_dump(is_dir("myName.txt"));

// var_dump(file_exists("myName.txt"));
// var_dump(file_exists("myNameaa.txt"));

// print_r(scandir("."));

// unlink("myName.txt");
// rmdir("mytest");

$fileName = "my.txt";
if (file_exists($fileName)) {
    touch($fileName);
}

$fileStream = fopen($fileName, "w");
fwrite($fileStream, "Min");
fclose($fileStream);

$fileStream = fopen($fileName, "w");
fwrite($fileStream, "Nyan ");
fclose($fileStream);

$fileStream = fopen($fileName, "w");
fwrite($fileStream, "Htaw ");
fclose($fileStream);