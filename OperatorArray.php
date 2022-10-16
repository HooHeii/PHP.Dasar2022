<?php

$first = [
  "first_name" => "jack"
];

$last = [

  "last_name" => "miller"
];

$full = $first + $last;
var_dump($full);

$a = [
  "first_name" => "brand",
  "last_name" => "jewry"
];

$b = [
  "last_name" => "jecko",
  "first_name" => "caser"
];

var_dump($a == $b);
var_dump($a === $b);


