<?php

$automobili=array(array("BMW3","BMW5","BMW7"),
            array("Mercedes C klasa","Mercedes E klasa", "Mercedes S klasa"));

//rezultat je 2
echo count($automobili), "<br/>";

// rezultat je 8 (2 niza + 3*2 elemenata u svakom nizu)
echo count($automobili,1);

?>