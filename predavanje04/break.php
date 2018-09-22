<?php
//prikazuju se brojevi od 0 do 2
$i = 0;
for($i=0; $i <= 5; $i++){
    if($i == 3)
        break;
    
    echo $i;
    echo "<br/>";
}

echo "poslije petlje";

?>