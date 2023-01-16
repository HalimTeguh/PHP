<?php

$data = [
    "action" => "Update"
];

//From This
if (isset($data["action"])) {
    $action = $data["action"];
} else {
    $action = "Nothing";
}

echo $action . PHP_EOL;

//To This

$action2 = $data["action"] ?? "Nothing";

echo $action2 . PHP_EOL;

?>