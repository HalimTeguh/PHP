<?php

namespace Halim\Data;

class People{
    public function __construct(private string $name){

    }

    public function sayHello(string $name){
        echo "Hello $name, myName is $this->name";
    }
}