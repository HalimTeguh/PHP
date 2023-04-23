<?php

if(isset($_GET['key']) && $_GET['key'] == 'rahasia'){
    header('Content-Disposition: attachment; filename="profile.jpg"');
    header('Content-Type: image/jpg');
    readfile(__DIR__ . "/file/profile.png");
    exit();
}else{
    echo "Invalid Key";
}

?>