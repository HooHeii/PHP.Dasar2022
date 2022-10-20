<?php

function foo()
{
  echo "foo" . PHP_EOL;
}

function bar()
{
  echo "bar" . PHP_EOL;
}

$functionyangakandipanggil = "bar";
$functionyangakandipanggil();

$functionyangakandipanggil = "foo";
$functionyangakandipanggil();


//// penggunaan function

function sayHello(string $name, $filter)
{
  $finalname = $filter($name);
  echo "Hello $finalname" . PHP_EOL;
}

function sampleFunction(string $name):string {
  return "sample $name";
}

sayHello("marq", "sampleFunction"); 
sayHello("marq", "strtoupper"); 
sayHello("marq", "strtolower"); 