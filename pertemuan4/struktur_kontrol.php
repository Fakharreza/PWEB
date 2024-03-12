<?php 

$nilainumerik = 92;

if($nilainumerik >= 90 && $nilainumerik <= 100) {
    echo "Nilai : A","<br>" ; 
} elseif ($nilainumerik >= 80 && $nilainumerik < 90) {
    echo "NIlai : B","<br>";
} elseif ($nilainumerik >= 70 && $nilainumerik < 80) {
    echo "NIlai : C","<br>";
} elseif ($nilainumerik < 70) {
    echo "NIlai : D","<br>";
}

$jaraksaatini = 0;
$jaraktarget = 500;
$peningkatanharian = 30;
$hari = 0;

while  ($jaraksaatini < $jaraktarget) {
    $jaraksaatini += $peningkatanharian;
    $hari++;
}
echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500KM." . "<br>";

$jumlahlahan = 10;
$tanamanperlahan = 5;
$buahpertanaman = 10;
$jumlahbuah = 0;

for ($i = 1; $i <= $jumlahlahan; $i++) {
    $jumlahbuah += ($tanamanperlahan * $buahpertanaman);
}

echo "Jumlah Buah yang akan dipanen adalah: $jumlahbuah", "<br>";

$skorujian = [85,92,78,96,88];
$totalskor = 0;

foreach ($skorujian as $skor) {
    $totalskor += $skor;
}

echo "Total Skor ujian adalah : $totalskor","<br>";

$nilaisiswa = [85,92,58,64,90,55,88,79,79,96];

foreach ($nilaisiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai(Lulus) <br>";
}


echo "<br>";
echo "===== Menghitung Total Nilai =====";
$nilaiMtk10 = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
    sort($nilaiMtk10);

    $jumlahNilaiMtk10 = 0;
    for ($i = 2; $i < (count($nilaiMtk10)-2); $i++){
        $jumlahNilaiMtk10 += $nilaiMtk10[$i];
    }
    $rataRataNilai = $jumlahNilaiMtk10 / (count($nilaiMtk10)-4);
    echo "<br> Rata-rata nilai Matematika = $rataRataNilai";
    echo "<br>";


    echo "<br>";
    echo "===== Menghitung harga diskon =====";
$totalBayar = 12000;
    if ($totalBayar > 10000){
        echo "<br>Selamat! Anda mendapatkan diskon 20%<br>";
        echo "Total belanja : $totalBayar<br>";
        echo "Total bayar :". $totalBayar-($totalBayar*0.20) . "<br>";
    }else
        echo "<br>Total bayar : $totalBayar";
        echo "<br>";


        echo "<br>";
        echo "=====  =====";
$hargaAwal = 120000;
$diskonPersentase = 0.20;

$hargaSetelahDiskon = $hargaAwal - ($diskonPersentase * $hargaAwal);
echo "Harga setelah diskon: Rp " . $hargaSetelahDiskon;

echo "<br>";
echo "===== Menghitung Poin =====";
$skor = [100,200,250,300];

$totalSkor = 0;
foreach ($skor as $angka){
    $totalSkor += $angka; 
}
echo "<br>";
echo "Total skor pemain adalah $totalSkor <br>";
echo "apakah pemain mendapat hadiah tambahan?<br>";
$hadiah = ($totalSkor > 500)? "Ya " : "tidak";
echo $hadiah;   

?>