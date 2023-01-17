<?php

namespace Data;

abstract class Animal
{
    public string $name;

    abstract public function run(): void;
}

class Cat extends Animal
{
    public function run(): void
    {
        echo "Cat $this->name is Running" . PHP_EOL;
    }
}