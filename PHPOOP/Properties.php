<?php

require_once "data/Person.php";

$person = new Person("Halim", "Malang"); //deklarasi object
$person->name = "Halim"; //cara memanipulasi data properties
$person->address = "Malang";
$person->country = "Indonesia";

var_dump($person);
echo "\n";
echo "Nama\t: {$person->name}" . PHP_EOL;
echo "Alamat\t: {$person->address}" . PHP_EOL;
echo "Negara\t: {$person->country}" . PHP_EOL;

echo "\n";
$person2 = new Person("Teguh", null);
$person2->name = "Teguh";

echo "Nama\t: {$person2->name}" . PHP_EOL;
echo "Alamat\t: {$person2->address}" . PHP_EOL;
echo "Negara\t: {$person2->country}" . PHP_EOL;