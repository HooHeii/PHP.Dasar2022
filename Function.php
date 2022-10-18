<?php

Function sayHello()
{
  echo "Hello Function" . PHP_EOL;
}

sayHello();
sayHello();


////Lokasi function

$buat = true;

if ($buat){
  function sayHello()
  {
    echo "Hello Function" . PHP_EOL;
  }
} 

sayHello();
sayHello();
sayHello();
sayHello();

