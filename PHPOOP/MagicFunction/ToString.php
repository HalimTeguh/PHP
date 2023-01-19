<?php

class Student
{
    public string $id;
    public string $name;
    public int $value;

    public function __clone()
    {
        $this->id += 1;
    }

    public function __toString(): string
    {
        return "Student ID: $this->id, Name: $this->name, Value: $this->value." . PHP_EOL;
    }

}