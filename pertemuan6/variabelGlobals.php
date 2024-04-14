<?php
$x = 75;
$y = 25;

function additon(){
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

additon();
echo $z;
?>