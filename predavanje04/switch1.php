<?php

$naziv_meseca="Januar";
$mesec=12;

switch($mesec) {
case 1: $naziv_meseca="Januar";break;
case 2: $naziv_meseca="Februar";break;
case 3: $naziv_meseca="Mart";break;
case 4: $naziv_meseca="April";break;
case 5: $naziv_meseca="Maj";break;
case 6: $naziv_meseca="Jun";break;
case 7: $naziv_meseca="Jul";break;
case 8: $naziv_meseca="Avgust";break;
case 9: $naziv_meseca="Septembar";break;
case 10: $naziv_meseca="Oktobar";break;
case 11: $naziv_meseca="Novembar";break;
case 12: $naziv_meseca="Decembar";break;
default: echo "Nepoznat mesec!";
}

echo "U pitanju je mesec <font color=red> $naziv_meseca </font> ";

?>