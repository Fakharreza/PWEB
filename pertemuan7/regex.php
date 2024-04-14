<?php
$pattern = '/[a-z]/';
$text = 'This is a sample text.';
if(preg_match($pattern,$text)){ 
        echo "huruf kecil ditemukan !";
}else{
    echo "tidak ada huruf kecil !";
}

echo "<br>";


$pattern = '/[0-9]+/';
$text = 'There are 123 apples.';

if(preg_match($pattern,$text,$matches)){ 
    echo "cocokan : ".$matches[0];
}else{
    echo "Tidak ada yang cocok!";
}

echo "<br>";


$pattern = '/apple/';
$replacement = 'banana';
$text = 'i like apple pie.';
$new_text = preg_replace($pattern,$replacement,$text); 
echo $new_text;

echo "<br>";


$pattern = '/go*d/'; 
$text = 'god is good';
if(preg_match($pattern,$text,$matches)){
    echo "cocokan : ".$matches[0];
}else{
    echo "tidak ada yang cocok!";
}

echo "<br>";


$pattern = '/\?/';
$text = 'What is it?';

if (preg_match($pattern, $text)) {
    echo "Tanda '?' ditemukan";
} else {
    echo "Tanda '?' tidak ditemukan!";
}

echo "<br>";


$pattern = '/o{1,3}/';
$text = "So soon you'll take me up in your arms, too late to beg you or cancel it though I know it must be the killing time";

if (preg_match_all($pattern, $text, $matches)) {
    echo "Ditemukan " . count($matches[0]) . " cocokan: ";
    foreach ($matches[0] as $match) {
        echo $match . " ";
    }
} else {
    echo "Tidak ada yang cocok!";
}

?>