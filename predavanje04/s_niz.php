<?php

$automobili=array("BMW","AUDI","MERCEDES","VW","SEAT");

for($i=0;$i<5;$i++){
    echo "automobili[$i]=$automobili[$i]<br/>";	
}
echo "<br/><br/>";

//sortira u rastucem redosledu
sort($automobili,SORT_STRING);

for($i=0;$i<5;$i++){
    echo "automobili[$i]=$automobili[$i]<br/>";	
}

?>