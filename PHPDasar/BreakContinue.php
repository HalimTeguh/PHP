<?php

//Break
echo "Break" . PHP_EOL;

$counter = 1;
while (true) {
    echo "Ini Perulangan ke-" . $counter . PHP_EOL;
    $counter++;

    if ($counter > 10) {
        break;
    }
}

echo "\n";

//Continue
echo "Continue\n";
$counter2 = 0;

while (true) {
    $counter2++;
    if ($counter2 % 2 == 0) {
        continue;
    } else if ($counter2 >= 10) {
        break;
    }
    echo "Ini Perulangan ke-" . $counter2 . PHP_EOL;
}



?>