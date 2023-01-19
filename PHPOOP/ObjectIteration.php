<?php

class Data implements IteratorAggregate
{
    var string $first = "First";
    var string $second = "Second";
    protected string $third = "Third";
    private string $forth = "Forth";

    // ARRAY ITERATOR
    // public function getIterator() 
    // {
    //     $array = [
    //         "First" => $this->first,
    //         "Second" => $this->second,
    //         "Third" => $this->third,
    //         "Forth" => $this->forth
    //     ];

    //     return new ArrayIterator($array);
    // }

    //GENERATOR
    public function getIterator()
    {
        yield "First" => $this->first;
        yield "Second" => $this->second;
        yield "Third" => $this->third;
        yield "Forth" => $this->forth;
    }

}

//object iteration hanya bisa dilakukan apabila propertinya bersifat public

$data = new Data();

foreach ($data as $iteration => $value) {
    echo "$iteration : $value" . PHP_EOL;
}