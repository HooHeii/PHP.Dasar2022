<?php

goto a;
echo "Hello Bro" . PHP_EOL;

a: 
echo "Hello Cuy" . PHP_EOL;


/// GO To Perulangan Loop Complex

$counter = 1;

while (true){
  echo "Ini adalah for while ke-$counter" . PHP_EOL;
  $counter++;

  if ($counter > 10) {
      goto end;
  }
}

end:
echo "End Loop";