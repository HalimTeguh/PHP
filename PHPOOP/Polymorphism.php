<?php

require_once "Data/Programmer.php";

$company = new Company();


$company->programmer = new Programmer("Halim");
var_dump($company);

$company->programmer = new BackendProgrammer("Halim");
var_dump($company);

$company->programmer = new FrontendProgrammer("Halim");
var_dump($company);

//Polymorphism Function
sayHello(new Programmer("Halim"));
sayHello(new BackendProgrammer("Halim"));
sayHello(new FrontendProgrammer("Halim"));