<?php

function veci($x, $y) {
    if(!isset($x)||!isset($y)) {
        echo 'Nisu dobro prosledjeni brojevi';
        return;
    }

    if($x>=$y)
        echo $x;
    else
        echo $y;
}

$a=25;
$b=30;

//ispisuje 30
veci($a,$b);

//izbacuje gresku i ispisuje "Nisu dobro prosledjeni brojevi"
veci($a);

?>