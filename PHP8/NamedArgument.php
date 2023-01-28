<?php

function sayHello(string $first, string $middle, string $last): void
{
    echo "Hello $first $middle $last" . PHP_EOL;
}

//tanpa named argument
sayHello("Halim", "Teguh", "Saputro");

//dengan named argument
sayHello(last: "Saputro", first: "Halim", middle: "Teguh");