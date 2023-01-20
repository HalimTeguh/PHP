<?php

class Zero
{
    private array $properties = [];

    public function __get($name)
    {
        return $this->properties[$name];
    }

    public function __set($name, $value)
    {
        $this->properties[$name] = $value;
    }

    public function __isset($name): bool
    {
        return isset($this->properties[$name]);
    }

    public function __unset($name)
    {
        unset($this->properties[$name]);
    }

    public function __call($name, $argument)
    {
        $join = join(", ", $argument);
        echo "call function $name with arguments $join" . PHP_EOL;
    }

    public static function __callStatic($name, $argument)
    {
        $join = join(", ", $argument);
        echo "call static function $name with arguments $join" . PHP_EOL;
    }
}

$zero = new Zero();

$zero->firstName = "Halim";
$zero->middleName = "Teguh";
$zero->lastName = "Saputro";

echo "First Name\t: $zero->firstName" . PHP_EOL;
echo "Middle Name\t: $zero->middleName" . PHP_EOL;
echo "Last Name\t: $zero->lastName" . PHP_EOL;

echo "\n";

$zero->sayHello("Halim"); //callback function yang tidak ada
$zero::SayHello("Halim"); //callback static function yang tidak ada