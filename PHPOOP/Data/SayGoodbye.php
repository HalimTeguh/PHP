<?php

namespace Data\traits;


trait SayGoodBye
{
    function goodBye(?string $name): void
    {
        if (is_null($name)) {
            echo "Good Bye" . PHP_EOL;
        } else {
            echo "Good Bye $name" . PHP_EOL;
        }
    }
}

trait SayHello
{
    function sayHello(?string $name): void
    {
        if (is_null($name)) {
            echo "Hello" . PHP_EOL;
        } else {
            echo "Hello $name" . PHP_EOL;
        }
    }
}

trait HasName
{
    public string $name;
}

trait CanRun
{
    public abstract function run(): void;
}

class ParentPerson
{
    use SayGoodBye, SayHello, HasName, CanRun;
    /**
     */
    public function run(): void
    {
        echo "Person $this->name is running" . PHP_EOL;
    }

    public function goodBye(?string $name): void
    {
        echo "Good Bye in Person";
    }

    public function Hello(?string $name): void
    {
        echo "Hello in Person";
    }
}

class Person extends ParentPerson
{

}