<?php

$sayHello = function (string $name) {
  echo "Hello $name" . PHP_EOL;
};

$sayHello("jack");
$sayHello("marques");


//// Anonymous Function Argument

function sayGoodBye(string $name, $filter)
{
  $finalname = $filter($name);
  echo ("Good Bye $finalname") . PHP_EOL;
}

sayGoodBye("marques", function (string $name): string {
    return strtoupper($name);
});

$filterFunction = function (string $name): string {
  return strtoupper($name);
};
sayGoodBye("jack", $filterFunction);

//// mengakses Variable di luar Closure

$OneName = "jack";
$SecondName = "marques";

$sayHellojack = function () use ($OneName, $SecondName) {
  echo "Hello $OneName, $SecondName" . PHP_EOL;
};

$sayHellojack();










 
