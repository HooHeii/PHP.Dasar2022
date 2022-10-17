<?php

$counter = 1;

while ($counter <= 10){
  echo "Ini adalah for while ke-$counter" . PHP_EOL;
  $counter++;
}

///syntax alternatif while loop

$counter = 1;

while ($counter <= 10) :
  echo "Ini adalah for while ke-$counter" . PHP_EOL;
  $counter++;
endwhile;

