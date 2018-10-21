<?php

// funkcija ima dva argumenta
// jedan prosledjen po vrednosti, a drugi po referenci
function uvecaj(&$a,$b) {
    $a++;
    $b++;
}

$broj=0;
$broj1=0;

uvecaj($broj,$broj1);

//ispisuje 1,jer je $broj prosledjen po referenci
echo "Prvi argument je: $broj<br/>";

//ispisuje 0, jer je $broj1 prosledjen po vrednosti
echo "Drugi argument je: $broj1<br/>";

?>