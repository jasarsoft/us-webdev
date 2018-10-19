<?php

$kolicina=10;

switch($kolicina) {
  case ($kolicina<=10): echo "imate popust od 10 odsto"; 
                break;
  case 20: echo "imate popust od 20 odsto"; 
                break;
  case 30: echo "imate popust od 30 odsto";
               break;
  default:  echo "nejasna je kolicina";
               break;
}

?>