<?php
function perkenalan($nama , $salam = "Assalamualaikum"){
    echo $salam. " , ";
    echo "Perkenalkan , nama saya " .$nama. "<br/>";
    echo "Senang berkenalan dengan Anda <br/>";
}

perkenalan("Fakhar Reza " , "hallo");

echo"<hr>";

$saya = "Reza";
$ucapanSalam =   "Selamat pagi";

perkenalan($saya , $ucapanSalam);
?>