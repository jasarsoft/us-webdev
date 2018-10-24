<?php

class customException extends Exception {
    public function errorMessage() {
        //poruka o gresci
        $errorMsg = 'Greska na liniji '.$this->getLine() . 
                    ' u fajlu'.$this->getFile() .
                    ': <b>'.$this->getMessage().'</b>';
    
        return $errorMsg;
    }
}

function checkNum($number) {
    if($number<=1) {
        throw new customException("Broj mora da bude veci od jedan");
    }
  
    return true;
}

try {
   checkNum(1);
    
   echo 'Ako ovo vidimo, onda je dobro';
} catch (customException $e) {
    //prikazi poruku
    echo $e->errorMessage();
}

?>