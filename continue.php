<?php

for ($counter = 1; $counter <= 50; $counter++) {
  if($counter % 2 == 0) {
    continue;
  }
  echo "counter : $counter" . PHP_EOL;
}

for ($counter = 1; $counter <= 50; $counter++) {
  if($counter % 2 == 1) {
    continue;
  }
  echo "counter : $counter" . PHP_EOL;
}
