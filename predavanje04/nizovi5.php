<?php

$automobili=array("AUDI","BMW","MERCEDES","FIAT","SEAT","RENO");

while(list($indeks,$marka)=each($automobili)){
    echo "Indeks: $indeks, marka: $marka <br/>";	
}

?>