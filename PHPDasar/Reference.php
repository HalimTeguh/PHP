<?php

$name = "Halim";

$ambilNama = & $name;

echo $ambilNama . PHP_EOL;

$ambilNama = "Teguh";

echo $ambilNama . PHP_EOL;
echo $name . PHP_EOL;

$name = "Halim";

echo $ambilNama . PHP_EOL . PHP_EOL;

function increment(int &$value)
{
    $value++;
}

$counter = 1;
increment($counter);
increment($counter);
increment($counter);
echo $counter . PHP_EOL;


?>