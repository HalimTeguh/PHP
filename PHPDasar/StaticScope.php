<?php

function increment()
{
    static $data = 0;

    echo "Data\t: $data" . PHP_EOL;

    $data++;
}

increment();
increment();
increment();

?>