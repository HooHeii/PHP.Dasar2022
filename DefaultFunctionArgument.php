<?php

function sayHello ($firstname, $lastname = "")
{
  echo "Hello $firstname $lastname" . PHP_EOL;
}

sayHello("marq");
sayHello("json");
sayHello("Anonymous", "hacker");