<?php

$gender = "s";

$greetings = null;

//from this
if ($gender == "L") {
    $greetings = "Hy Bro";
} else {
    $greetings = "Hy Sist";
}

echo $greetings . PHP_EOL;

//to this
$greetings = $gender == "L" ? "Hy Bro" : "Hy Sist";

echo $greetings;

?>