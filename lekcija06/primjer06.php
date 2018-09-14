<?php
    $niz = [13.6, 55.0, -1.5, 0.09, 100.0];
    
    foreach ($niz as $item){
        if($item >= 50.0){
            printf("%.2f<br>", $item);
        }
    }