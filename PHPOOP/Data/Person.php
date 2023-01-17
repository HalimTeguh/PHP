<?php

class Person //Deklarasi class

{

    const AUTHOR = "HALIM TEGUH SAPUTRO"; //Deklarasi Constant

    var string $name; //Deklarasi Properties
    var ?string $address = null; // set properties nullable (add ? before data type)
    var string $country = "Indonesia"; //set default value properties

    function __construct(string $name, ?string $address) // deklarasi Construct

    {
        $this->name = $name;
        $this->address = $address;
    }

    function sayHello(?string $name) //Deklarasi Function

    {
        if (is_null($name)) {
            echo "Hi, my name is {$this->name}" . PHP_EOL;
        } else {
            echo "Hi $name, my name is {$this->name}" . PHP_EOL;
        }
    }

    function info()
    {
        echo "Author\t: " . self::AUTHOR . PHP_EOL;
    }

    function __destruct()
    {
        echo "Object person $this->name is Destroyed" . PHP_EOL;
    }
}