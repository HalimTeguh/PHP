<?php

$dateTime = new DateTime();

var_dump($dateTime);

$dateTime->setDate(2000, 1, 50);
$dateTime->setTime(21, 04, 50);

var_dump($dateTime);

//mengubah salah satu data pada DateTime

$dateTime->add(new DateInterval("P1Y"));
var_dump($dateTime);

$minus2M = new DateInterval("P3M");
$minus2M->invert = true;
$dateTime->add($minus2M);

var_dump($dateTime);

//mengubah setting timezone

$now = new DateTime();
var_dump($now);

$now->setTimezone(new DateTimeZone("America/Toronto"));
var_dump($now);

//mengedit datetime format

$string = $now->format("Y-m-d h:i:s");
echo "Waktu saat ini $string" . PHP_EOL;

//String to DateTime
$dateString = "2003-03-20 19:09:30";
$dateTimezone = new DateTimeZone("Asia/Jakarta");
$date = DateTime::createFromFormat("Y-m-d H:i:s", $dateString, $dateTimezone);

var_dump($date);