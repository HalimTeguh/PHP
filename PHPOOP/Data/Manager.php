<?php

class Manager
{

    var string $name;

    var string $title;

    public function __construct(string $name = "", string $title = "Manager")
    {
        $this->name = $name;
        $this->title = $title;
    }

    function sayHello(string $name): void
    {
        echo "Hi $name, my name is Manager $this->name" . PHP_EOL;
    }
}

class VicePresident extends Manager
{ //deklarasi Inheritance

    public function __construct(string $name = "")
    {
        parent::__construct($name, "Vice Manager");
    }

    function sayHello(string $name): void //Overriding

    {
        echo "Hi $name, my name is Vice Manager $this->name" . PHP_EOL;
    }
}