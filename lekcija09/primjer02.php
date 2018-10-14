<?php
    $niz = [12, 10, 90, 55, 9, 80, 43, -5, 13, -9];
    
    function provjeraVrijednosti($item){
        return $item > 20 and $item < 90;
    }
    
    $niz = array_filter($niz, "provjeraVrijednosti");
    
    $niz = array_values($niz);
    
    print_r($niz);
            
            