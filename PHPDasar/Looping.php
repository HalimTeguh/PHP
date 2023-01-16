<?php

//For Looping
echo "For Looping" . PHP_EOL;
for ($i = 0; $i < 5; $i++) {
    echo "* " . PHP_EOL;
}

echo "\n";

//For Nested Looping
echo "For Nested Looping" . PHP_EOL;
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 5; $j++) {
        echo "* ";
    }
    echo "\n";
}

echo "\n";


//While Looping
echo "While Looping" . PHP_EOL;

$counter = 1;

while ($counter <= 10) {
    echo "Perulangan ke- " . $counter . PHP_EOL;
    $counter++;
}

echo "\n";

//Do While Looping
echo "Do While Looping\n";

$hitung = 1;

do {
    echo "Perulangan ke- " . $hitung . PHP_EOL;
    $hitung++;
} while ($hitung <= 10);

?>