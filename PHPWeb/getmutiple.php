<?php
$say = "Hello " . $_GET['firstname'] . " " . $_GET['lastname'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_GET</title>
</head>

<body>
    <h1>
        <?= $say ?>
    </h1>
</body>

</html>