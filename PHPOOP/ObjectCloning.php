<?php

require_once "Data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Halim";
$student1->value = 10;

$student2 = clone $student1; //clone keyword akan menduplikasi semua properties dan value cloningannya.
//untuk memodifikasi hasil clonenya, dapat menambahkan function __clone() di class Objectnya.

var_dump($student1);
var_dump($student2);