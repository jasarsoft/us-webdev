<?php

//primer tablice mnozenja

echo "<table border=\"1\">";
    for ($r =1; $r <11; $r++){
        echo "<tr>";

        for ($c = 1; $c <11; $c++)
            echo '<td align="center">' .$c*$r.'</td>';

        echo "</tr>"; // close tr tag here
    }
echo "</table>";

?>