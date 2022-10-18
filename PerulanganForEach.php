<?php


$names = ["marq", "miller", "json"];

foreach ($names as $index => $name) {
    echo "Data ke $inndex = $name" . PHP_EOL;
}

$names = ["marq", "miller", "json"];

for ($i = 0; $i < count($names); $i++) {
    echo "Data ke $i = $names[$i]" . PHP_EOL;
}


///For Each Dengan Key

$person = [
  "first_name" => "marq",
  "middle_name" => "miller",
  "last_name" => "json"
];

foreach  ($person as $key => $value) {
   echo "$key : $value" . PHP_EOL;
}