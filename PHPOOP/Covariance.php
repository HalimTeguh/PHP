<?php

require_once "Data/Animal.php";
require_once "Data/Food.php";
require_once "Data/AnimalShelter.php";

use Data\CatShelter;
use Data\DogShelter;

$catShelter = new CatShelter;
$cat = $catShelter->adopt("Neko");

var_dump($cat);
$cat->eat(new \Data\AnimalFood());

$dogShelter = new DogShelter;
$dog = $dogShelter->adopt("Inu");

var_dump($dog);
$dog->eat(new \Data\AnimalFood());