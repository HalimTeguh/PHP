<?php

$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("halim");

function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good Bye $finalName" . PHP_EOL;
}

sayGoodBye("Eko", function (string $name): string {
    return strtoupper($name);
});


$firstName = "Halim";
$lastName = "Teguh";

$sayHello = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};

$sayHello();

?>