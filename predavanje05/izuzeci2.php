<?php

function checkNum($number) {
    if($number>5) {
        throw new Exception("Broj mora da bude manji od ili jednak 5", 13);
    }
  
    return true;
}

checkNum(6);

?>