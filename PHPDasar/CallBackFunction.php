<?php

function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name); //mirip seperti $filter($name)
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Eko", "strtoupper");

?>