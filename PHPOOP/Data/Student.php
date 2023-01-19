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

}