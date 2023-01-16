<?php

function sayHello()
{
    echo "Hello Function" . PHP_EOL;
}

//function with argument 
function greetings($name)
{
    echo "Hello, $name" . PHP_EOL;
}

//function with default argument 
function greetings1($name = "User")
{
    echo "Hello, $name" . PHP_EOL;
}

//function with Type data argument 
function sum(int $a, int $b)
{
    $total = $a + $b;
    echo "Total dari $a + $b adalah $total" . PHP_EOL;
}

//function with Type data argument 
function sumAll(...$values)
{
    $total = 0;
    foreach ($values as $tmp) {
        $total += $tmp;
    }

    echo "Total " . implode(" + ", $values) . " = $total" . PHP_EOL;
}

//function with return value
function sumReturn(int $a, int $b): int //return type data  

{
    $total = $a + $b;
    return $total;
}

sayHello();

$nama = "Halim";
greetings($nama);

$nama1;
greetings1();

sum(5, 5);

sumAll(1, 2, 3, 4, 5, 5);

$hasil = sumReturn(20, 5);
var_dump($hasil);

?>