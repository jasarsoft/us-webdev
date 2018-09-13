<?php
    $string = 'Univerzitet Singidunum';
    
    $niz = [1, 2, 33, 44, 10, 45, -190, 1, 9];
    
    $niz2 = explode(' ', $string);
    
    echo count($niz2); 
    echo "<br>";
    echo $niz2[1];