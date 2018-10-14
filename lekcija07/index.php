<?php
    function f1(){
        echo 'Vrijednost.<br>';
    }
    
    function f2(){
        return 57;
    }
    
    function f3($arg1){
        return round($arg1);
    }
    
    function f4($arg1){
        echo $arg1 . " je poslao kao argument";
    }
    
    function f5($arg1){
        if($arg1 == 'ok'){
            return 55.66;
        } elseif ($arg1 == 'not') {
            return true;
        } else {
            return 'nesto drugo';
        }
    }
    
    function f6($niz){
        if(is_array($niz)){
            return $niz[count($niz) - 1];
        } else {
            echo 'Ovo nije niz.';
        }
    }
    
    
    f1();
    echo f2() . "<br>";
    echo f3(55.87) . "<br>";
    f4('String');
    echo f5('not') . "<br>";
    echo f6([13, 55, 11]) . "<br>";
    f6('nije niz');