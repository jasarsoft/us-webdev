<?php

// prikazuju se samo parni brojevi iz intervala od 1 do 10
$i = 0;

for ($i = 1;$i <= 10;$i++)
{
    if ($i%2!=0)
       continue;
    
    echo "Broj je: $i";
    echo "<br />";
}

?>