 <?php

 function sayHello(string $name, callable $filter)
 {
  $finalName = call_user_func($filter, $name);
  echo "Hello $finalName" . PHP_EOL;
 }

 sayHello("marq", "strtoupper");
 sayHello("marq", "strtolower");
 sayHello("marq", function (string $name): string {
  return strtoupper($name);
 });

sayHello("marq", fn($name) => strtoupper($name));