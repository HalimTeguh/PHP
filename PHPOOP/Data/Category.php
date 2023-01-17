<?php

namespace Data;

class Category
{
    private string $name;
    private bool $expensive = false;

    public function __construct(string $name, ?bool $expensive)
    {
        $this->name = $name;
        $this->expensive = $expensive;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        if (trim($name) != "") {
            $this->name = $name;
        }
    }

    public function isExpensive(): bool
    {
        return $this->expensive;
    }

    public function setExpensive(bool $expensive): void
    {
        $this->expensive = $expensive;
    }
}