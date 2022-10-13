<?php

$values = array(1, 2.6, 3, 4.5);
var_dump($values);

$name = ["hendrik", "endrik", "hendrikus"];
var_dump($name);


var_dump($name[0]);

$name[0] = "kancat";
var_dump($name);


unset($name[1]);
var_dump($name);

$name[] = "kendil";
var_dump($name);

var_dump(count($name));

$hendrik = array(
        "1" => "berlian",
        "2" => "kendil",
        "3" => 25
);

$kendil = array(
        "id" => "berlian",
        "name" => "kendil",
        "age" => 25,
        "address" => [
          "city" => "Bandung",
          "country" => "Indonesia"
        ]
);
var_dump($kendil["address"]["country"]);









