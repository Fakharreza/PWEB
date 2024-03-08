<?php 
$a = 10;
$b = 5;
$c = $a + 5;
$d = $b + (10*5);
$e = $d - $c;

echo "Variabel a: {$a} <br>";
echo "Variabel b: {$b} <br>";
echo "Variabel c: {$c} <br>";
echo "Variabel d: {$d} <br>";
echo "Variabel e: {$e} <br>";

var_dump($e);

$nilaiMatematika = 5.1;
$nilaiIPA = 6.7;
$NilaiBahasaIndonesia = 9.1;

$ratarata = ($nilaiIPA * $nilaiMatematika * $NilaiBahasaIndonesia) / 3;

echo "Matematika : {$nilaiMatematika} <br>";
echo "IPA : {$nilaiIPA} <br>";
echo "Bahasa Indonesia : {$NilaiBahasaIndonesia} <br>";
echo "Rata Rata : {$ratarata} <br>";

var_dump($ratarata);

$apakahsiswalulus = true;
$apakahsiswasudahujian = false;

var_dump($apakahsiswalulus);
echo "<br>";
var_dump($apakahsiswasudahujian);

$namadepan = "Ibnu";
$namabelakang = 'Jakaria';

$namalengkap = "{$namadepan} {$namabelakang}";
$namalengkap2 = $namadepan . '' . $namabelakang;

echo "Nama Depan: {$namadepan} <br>";
echo "Nama Belakang: " . $namabelakang . '<br>';

echo $namalengkap;

$listmahasiswa = ["Wahid", "Elmo", "Lendis"];
echo $listmahasiswa[0];
?>