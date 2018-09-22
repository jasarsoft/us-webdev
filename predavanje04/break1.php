<?php

$x = 2 ;

while($x) {
    for($j=0;;$j++) {
        echo $j * $x, " ";
          
        if($j * $x >= 10) {
            break 2; // izlazi iz while petlje
        }
            
    }
      
    $x ++ ;
}

// stampace se 0 2 4 6 8 10

?>