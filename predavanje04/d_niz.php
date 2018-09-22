<?php

$parniBrojevi=array();

// dodaje parne brojeve od 1 do 20 u niz
for($i=1;$i<20;$i++) {
    if($i%2==0) array_push($parniBrojevi,$i);
}

//prikazuje poslednji element niza
echo "Poslednji element u nizu je: ", array_pop($parniBrojevi);

?>