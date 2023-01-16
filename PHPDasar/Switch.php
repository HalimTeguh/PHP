<?php
$menu = 1;

echo <<<MENU

Selamat Datang di Rumah makan sederhana
1. Ayam Goreng\t: 15000
2. Bebek Goreng\t: 17000
3. Nasi Goreng\t: 10.000
4. Nasi Pecel\t: 10.000

pilih menu: 

MENU;

switch ($menu) {
    case 1:
        echo "Anda memilih Ayam Goreng\n";
        break;
    case 2:
        echo "Anda memilih Bebek Goreng\n";
        break;
    case 3:
        echo "Anda memilih Nasi Goreng\n";
        break;
    case 4:
        echo "Anda memilih Nasi Pecel\n";
        break;
}

?>