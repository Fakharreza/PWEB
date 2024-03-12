<?php 

$a = 10;
$b = 5;

$tambah = $a + $b;
$kurang = $a - $b;
$kali = $a * $b;
$bagi = $a / $b;
$sisabagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Penjumlahan: " . $tambah . "<br>";
echo "Hasil Pengurangan: " . $kurang . "<br>";
echo "Hasil Perkalian: " . $kali . "<br>";
echo "Hasil Pembagian: " . $bagi . "<br>";
echo "Sisa Pembagian: " . $sisabagi . "<br>";
echo "Hasil Pangkat: " . $pangkat . "<br>";

$hasilsama = $a == $b;
$hasiltidaksama = $a != $b;
$hasillebihkecil = $a < $b;
$hasillebihbesar = $a > $b;
$hasillebihkecilsama = $a <= $b;
$hasillebihbesarsama = $a >= $b;

echo "Apakah $a sama dengan $b? " . ($hasilsama ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah $a tidak sama dengan $b? " . ($hasiltidaksama ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah $a lebih kecil dari $b? " . ($hasillebihkecil ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah $a lebih besar dari $b? " . ($hasillebihbesar ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah $a lebih kecil atau sama dengan $b? " . ($hasillebihkecilsama ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah $a lebih besar atau sama dengan $b? " . ($hasillebihbesarsama ? 'Ya' : 'Tidak') . "<br>";

$hasiland = $a && $b;
$hasilor = $a || $b;
$hasilnota = !$a;
$hasilnotb = !$b;

echo "Hasil dari \$a && \$b: " . ($hasiland ? 'true' : 'false') . "<br>";
echo "Hasil dari \$a || \$b: " . ($hasilor ? 'true' : 'false') . "<br>";
echo "Hasil dari !\$a: " . ($hasilnota ? 'true' : 'false') . "<br>";
echo "Hasil dari !\$b: " . ($hasilnotb ? 'true' : 'false') . "<br>";

$TambahSamaDengan = $a += $b; 
$KurangSamaDengan = $a -= $b; 
$KaliSamaDengan = $a *= $b;   
$BagiSamaDengan = $a /= $b;   
$SisaBagiSamaDengan = $a %= $b;

echo "Setelah $a += $b, nilai $a menjadi  $TambahSamaDengan;", "<br>";
echo "Setelah $a -= $b, nilai $a menjadi  $KurangSamaDengan;", "<br>";
echo "Setelah $a *= $b, nilai $a menjadi  $KaliSamaDengan;", "<br>" ;
echo "Setelah $a /= $b, nilai $a menjadi  $BagiSamaDengan;", "<br>" ;
echo "Setelah $a %= $b, nilai $a menjadi  $SisaBagiSamaDengan;", "<br>"; 

$hasilidentik = $a ===$b;
$hasiltidakidentik = $a !== $b;

echo "Hasil dari \$a===\$b " . ($hasilidentik ? 'true' : 'false') . "<br>";
echo "Hasil dari \$a !== \$b: " . ($hasiltidakidentik ? 'true' : 'false') . "<br>"; 



echo "<br>";
echo "===== Menghitung Kursi Kosong =====";
$totalKursi = 45;
$kursiTerisi = 28;

$kursiKosong = $totalKursi - $kursiTerisi;
$persentaseKursiKosong = ($kursiKosong / $totalKursi) * 100;

echo "<br>";
echo "Total Kursi: $totalKursi <br>";
echo "Kursi Terisi: $kursiTerisi <br>";
echo "Kursi Kosong: $kursiKosong <br>";
echo "Persentase Kursi Kosong: $persentaseKursiKosong% <br>";


?>