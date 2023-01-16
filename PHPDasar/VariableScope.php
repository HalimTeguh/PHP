<?php


$data = "Halim"; //Global Scope

function sayHello($nama) //Local Scope

{
    echo $nama;
}

sayHello($data);