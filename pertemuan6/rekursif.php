<?php
// function tampilkanHaloDunia(){
//     echo "Halo Dunia! <br>";

//     tampilkanHaloDunia();

// }

// tampilkanHaloDunia();
function tampilAngka(int $jumlah , int $indeks= 1){
    echo "perulangan ke-{$indeks} <br>";
    if ($indeks< $jumlah){
   tampilAngka($jumlah , $indeks + 1 );
    }
}

tampilAngka(20);
?>