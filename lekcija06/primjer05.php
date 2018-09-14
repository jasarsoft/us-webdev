<?php
    $niz = [13.6, 55.0, -1.5, 0.09, 100.0];
    
    for($i = 0; $i < count($niz); $i++){
        if($niz[$i] >= 50.0){
            printf("%.2f<br>", $niz[$i]);
        }
    }