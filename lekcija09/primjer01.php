<?php
    $niz = [12, 10, 90, 55, 9, 80, 43, -5, 13, -9];
    
    $filtriraniNiz = [];
    foreach($niz as $item){
        if($item > 20 and $item <= 90){
            $filtriraniNiz[] = $item;
        }
    }
    
    print_r($filtriraniNiz);