<?php

function checkNum($number) {
    if($number<=1) {
        throw new Exception("Broj mora da bude veci od jedan");
    }
  
    return true;
}

try {
    checkNum(2);
    
    //Ako se desio izuzetak, tj. ako je broj <=1, kod ispod nece biti prikazan
    echo 'Ako vidite ovu poruku, onda je broj veci od 1';
} catch(Exception $e) { // hvatanje izuzetka
    echo 'Poruka:' .$e->getMessage();
}

?>