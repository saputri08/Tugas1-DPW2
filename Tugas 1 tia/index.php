<?php

include "Animal.php";

$omeng = new Kucing;
$omeng->jumlah_kaki = 4;
echo "omeng adalah kucing <br>";
echo $omeng->jumlah_kaki. "<br";
echo $omeng->bisa terbang. "<br>";
$omeng->bersuara(). "<br>";

echo "<hr>";

$doggi = new Anjing;
$doggi->jumlah_kaki = 4;
echo "doggi adalah anjing <br>";
echo $doggi->jumlah_kaki "<br>";
echo $doggi->bisa_terbang. "<br>";
$doggi->bersuara(). "<br>";

echo "<hr>";

$zya = new elang;
$zya->jumlah_kaki = 2;
echo "zya adalah elang <br>";
echo $zya->jumlah_kaki. "<br>";
echo $zya->bisa_terbang. "<br>";
$zya->bersuara(). "br";

echo "<hr>";

$zizi = new Angsa;
$zizi->jumlah_kaki = 2;
echo "zizi adalah angsa <br>";
echo $zizi->jumlah_kaki. "<br>";
echo $zizi->bisa_terbang. "<br>";
$zizi->bersuara(). "br";