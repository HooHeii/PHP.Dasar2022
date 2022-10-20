<?php

$FirstName = "Jack";
$LastName = "Muller";

$anonymousFunction = function () use ($FirstName, $LastName) : string {
  return "Hello $FirstName $LastName" . PHP_EOL;
};

$arrowFunction = fn() => "Hello $FirstName $LastName" . PHP_EOL;

echo $anonymousFunction();
echo $arrowFunction();