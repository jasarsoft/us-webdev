<?php

$kolicina=20;
$popust=0;

if($kolicina<10)
	$popust=10;
else if($kolicina>10 && $kolicina<=20)
	$popust=20;
elseif($kolicina>20)
	$popust=30;

echo "Na kolicinu od $kolicina jedinica proizvoda, ostvarili ste popust od <font color=red> $popust </font> odsto<br/>";

?>