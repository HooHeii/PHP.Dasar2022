<?php

function sum(int $first, int $second)
{
  $total = $first + $second;
  return $total;
}

$result = sum(10, 10);
var_dump($result);

$result = sum(100, 100);
var_dump($result);

/// Function Return Value (2)

function getFinalValue(int $value)
{
  if ($value >= 80 ) {
    return "A";
  } else if ($value >= 70) {
    return "B";
  } else if ($value >= 60) {
    return "C";
  } else if ($value >= 50) {
    return "D";
  } else {
    return "E";
  }
    echo "ups" . PHP_EOL;
}

$score = getFinalValue(90);
var_dump($score);

$score = getFinalValue(30);
var_dump($score);


/// return type declarations

