<?php
    $b = 'test';
    
    function a(){
        global $b;
        $b = strtoupper($b);
        echo $b;
    }
    
    a();
