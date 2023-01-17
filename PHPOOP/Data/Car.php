<?php

namespace Data;

interface HasBrand
{
    function getBrand(): string;
}

interface IsMaintanance
{
    function isMaintanance(): bool;
}

interface Car extends HasBrand
{
    function drive(): void;

    function getTire(): int;
}

class Avanza implements Car, IsMaintanance
{

    public function drive(): void
    {
        echo "Drive Avanza" . PHP_EOL;
    }

    public function getTire(): int
    {
        return 4;
    }

    public function getBrand(): string
    {
        return "Toyota";
    }

    public function isMaintanance(): bool
    {
        return false;
    }
}