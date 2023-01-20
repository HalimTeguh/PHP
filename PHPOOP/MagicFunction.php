<?php

require_once "MagicFunction/DebugInfo.php";

$student1 = new Student();

$student1->id = "1";
$student1->name = "Halim";
$student1->value = 100;

$string = (string) $student1;
echo $string;

echo $student1 . PHP_EOL;

var_dump($student1);