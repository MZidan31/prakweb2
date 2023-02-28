<?php
// definisikan variable konstana
define ('PHI', 3.14);

// soal pertama hitunglah luas lingkaran dengan jari jari 8
// soal kedua hitunglah keliling lingkaran dengan jari jari 8

// definisikan variable jari jari
$jari = 8;
$luas = PHI * $jari * $jari;
$keliling = 2 * PHI * $jari;

echo "Luas lingkaran dengan jari-jari $jari adalah $luas";
echo '<br/> keliling lingkaran dengan jari-jari ' . $jari . 'adalah' . $keliling;

?>