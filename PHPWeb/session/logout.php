<?php
    session_start();

    $_SESSION['username'] = "";
    $_SESSION['password'] = "";
    $_SESSION['Login'] = false;
    header('Location: /session/login.php');

?>