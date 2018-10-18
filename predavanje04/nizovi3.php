<?php

$automobili=array("AUDI","BMW","MERCEDES","FIAT","SEAT","RENO");

for($i=0;$i<=5;$i++){
    echo $automobili[$i],"<br/>";	
}
echo "<br/><br/>";

foreach($automobili as $automobil){
    echo $automobil,"<br/>";	
}

?>