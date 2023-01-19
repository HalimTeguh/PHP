<?php

require_once "Data/Student.php";

$student1 = new Student();

$student1->id = "1";
$student1->name = "Halim";
$student1->value = 10;

$student2 = new Student();

$student2->id = "1";
$student2->name = "Halim";
$student2->value = 10;

var_dump($student1 == $student2); //memastikan properti
var_dump($student1 === $student2); //memastikan object yang sama