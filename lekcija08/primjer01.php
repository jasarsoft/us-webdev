<?php
    $abc = [1, 2];
    
    switch($abc){
        case '123':
            echo 'Neki tekst';
            break;
        case 50.5:
            echo 'Realn broj';
            break;
        case true:
            echo "Istina je";
            break;
        case [1, 2]:
            echo "Niz je";
            break;
        default:
            echo "Ne znam sta je";
    }
