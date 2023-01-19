<?php

$array = [
    "firstName" => "Halim",
    "middleName" => "Teguh",
    "lastName" => "Saputro"
];

//merubah array menjadi object
$object = (object) $array;

var_dump($object);

echo "First Name\t: $object->firstName" . PHP_EOL;
echo "Middile Name\t: $object->middleName" . PHP_EOL;
echo "Last Name\t: $object->lastName" . PHP_EOL;