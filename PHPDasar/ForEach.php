<?php

$names = ["Halim", "Teguh", "Saputro"];

//From this
for ($i = 0; $i < count($names); $i++) {
    echo "Data ke $i = $names[$i]" . PHP_EOL;
}


//To This
foreach ($names as $name) {
    echo "$name ";
}

echo "\n";

//For Each Map
$person = [
    "first_name" => "Halim",
    "middle_name" => "Teguh",
    "last_name" => "Saputro"
];

foreach ($person as $data => $value) {
    echo "$value ";
}

echo "\n";

?>