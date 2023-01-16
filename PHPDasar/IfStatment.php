<?php

$uts = 78;
$uas = 80;

$avg = ($uts + $uas) / 2;

if ($avg >= 75) {
    echo "Selamat, Anda lulus!\n";
} else {
    echo "Anda Belum Lulus\n";
}

if ($avg >= 90) {
    echo "Nilai A";
} else if ($avg >= 75) {
    echo "Nilai B";
} else if ($avg >= 60) {
    echo "Nilai C";
} else if ($avg >= 40) {
    echo "Nilai D";
} else {
    echo "Nilai E";
}


?>