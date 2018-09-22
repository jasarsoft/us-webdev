<?php

// primer funkcije koja kao argument prima niz
// argument moze da bude bilo sta
function napravi_tabelu($arg){
    echo '<table border = 2>';
    reset($arg); // pokazivac na pocetak niza    
    $vrednost = current($arg); // pokazivac na tekuci element niza
    
    while ($vrednost) {
        echo "<tr><td>$vrednost</td></tr>\n";
        $vrednost = next($arg);
    }

    echo '</table>';
}

$niz = array('Veb','Programiranje','Singidunum');
napravi_tabelu($niz);

?>