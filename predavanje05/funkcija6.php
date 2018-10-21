<?php

function obrni($tekst) {
    if (strlen($tekst)>0)
        obrni(substr($tekst, 1));
    
    echo substr($tekst, 0, 1);
    return;
}

//ispisuje obrnuto tekst "Hello"
obrni("Hello");

?>