<?php

function sum(int $first, int $last)
{
  $total = $first + $last;
  echo "total $first + $last = $total" . PHP_EOL;
}

sum(100, 100);
sum("100", "200");
sum(true, false);
