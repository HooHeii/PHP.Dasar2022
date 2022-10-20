<?php

///assign by reference
$name = "marq";

$othername = &$name;

$othername = "jack";

echo $name . PHP_EOL;

///pass by reference
function increment(int &$value)
{
  $value++;
}

$counter = 1;
increment($counter);

echo $counter . PHP_EOL;

///returning reference

function &getvalue()
{
  static $value = 100;
  return $value;
}

$a = &getvalue();
$a = 200;

$b = &getvalue();
echo $b . PHP_EOL;

