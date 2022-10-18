<?php
function sumAll(array $values)
{
  $total = 0;
  foreach ($values as $value) {
    $total += $value;
  }
  echo "total " . implode(",", $values) . " = $total" . PHP_EOL;

}

sumAll([10, 20, 30, 40]);

////////tanpa array

{
  $total = 0;
  foreach ($values as $value) {
    $total += $value;
  }
  echo "total " . implode(",", $values) . " = $total" . PHP_EOL;

}

$values = [10, 20, 30, 40];

sumAll(...$values);



