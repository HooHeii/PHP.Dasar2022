<?php

    ///Dot Operator

$name = "marq marques miller";

echo "name : " . $name . PHP_EOL;
echo "Value : " . 3000 . PHP_EOL;

    ///Konversi ke Number dan Sebaliknya

$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"100";
var_dump($valueInt);

$valueFloat = (float)"1.01";
var_dump($valueFloat);

    ///Menggakses Karakter

$name = "marq";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;
echo $name[3] . PHP_EOL;

    ///Variable Parsing

echo "Hello " . $name . ", Selamat Belajar Pemograman PHP" . PHP_EOL;
echo "Hello $name, Selamat Belajar Pemograman PHP" . PHP_EOL;

    ///Curly Brace

$var = "php";
echo "Ini Pemograman ph {$var}p" . PHP_EOL;





