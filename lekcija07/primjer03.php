<?php
    function a(&$b){
        $b = strtoupper($b);
        $b[2] = '$';
    }
    
    $b = 'test';
    a($b);
    echo $b;
