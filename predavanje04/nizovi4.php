<?php

$automobili=array("AUDI","BMW","MERCEDES","FIAT","SEAT","RENO");

while($element=each($automobili)){
    echo $element['key'];
    echo "*";
    echo $element['value'];	
    echo "<br/>";	
}

?>