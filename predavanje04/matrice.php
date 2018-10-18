<?php

$komponente=array("CPU"=>array("Intel","AMD"),
                  "GPU"=>array("AMD","NVidia"),
                  "Monitor"=>array("Samsung","LG"));

//stampa 'Intel'
echo $komponente['CPU'][0], "<br/>";

// stampa 'Nvidia'
echo $komponente['GPU'][1];

?>