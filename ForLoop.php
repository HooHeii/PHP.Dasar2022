  <?php

/// Perulangan Tanpa Henti


/// Perulangan Dengan Kondisi

for ($counter = 1; $counter <= 10; $counter++){
  echo "Ini adalah for loop" . PHP_EOL;
  $counter++;
}

for ($counter = 10; $counter <= 1; $counter--){
  echo "Ini adalah for loop" . PHP_EOL;
  $counter--;
}


for ($counter = 1; $counter <= 10; $counter++):
  echo "Ini adalah for loop" . PHP_EOL;
  $counter++;
endfor;

for ($counter = 10; $counter <= 1; $counter--):
  echo "Ini adalah for loop" . PHP_EOL;
  $counter--;
endfor;


