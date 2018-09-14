<?php
    for($i = 0; $i<10; $i++){
        echo 'Vrijednost je ' . $i . '<br>';
        #echo "Vrijednost je {$i}" . '<br>';
    }
    
    for($i = 10; $i<100; $i++){
        $str = sprintf("Vrijednost je %5d<br>\n", $i);
        echo $str;
    }