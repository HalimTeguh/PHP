<?php
//String
//String dengan single quote ''
echo 'Nama : ';
echo 'Halim Teguh Saputro';

//String dengan double quote " "
echo "\n\n";
echo "Nama\t: ";
echo "Halim\t Teguh\t Saputro\n";

//String dengan multiline
echo <<<HALIM

Saya sedang Belajar PHP.
ini percobaan membuat String dengan Multiline String
dengan cara "Heredoc".

HALIM;

echo <<<'HALIM'

Saya sedang Belajar PHP.
ini percobaan membuat String dengan Multiline String
dengan cara "Nowdoc".

HALIM;

echo <<<HALIM

"Heredoc" dan "Nowdoc" sebenernya mirip, namun
Perbedaan antara "Heredoc" dan "Nowdoc" adalah
Nowdoc tidak dapat melakukan parsing data. 
sedangkan Heredoc bisa melakukan parsing data.

HALIM;

?>