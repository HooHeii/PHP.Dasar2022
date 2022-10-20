<?php

$name = "marq"; //Global Scope
 
function sayHello()
{
  global $name; // global Keyword
  echo $name . PHP_EOL; // Error

  echo $GLOBALS["name"] . PHP_EOL; // global scope/ global variable

}

sayHello();

