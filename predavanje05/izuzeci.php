<?php

try{
    throw new Exception("NAS IZUZETAK",13);
} catch(Exception $e){
    echo 'Desio se izuzetak pod brojem: '. $e->getCode() . 
         ' sa porukom: ' . $e->getMessage() . 
         ' u fajlu: ' . $e->getFile() . 
         ' u liniji koda: ' . $e->getLine() . '<br/>';
}

?>