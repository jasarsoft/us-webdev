<?php

// FUNKCIJE ZA RAD SA PROMENLJIVAMA
$ocena=10;

if($ocena==5) 
echo "Pali ste ispit!"; // nece biti ispisano

$ocena=5;

if($ocena==5)
echo "Pali ste ispit!"; //bice ispisano

$ocena=10; 
if($ocena>5)  // sada se izvrsava blok iskaza (naredbi)
{
	echo "<br/>";
	echo "<font color=blue>";	
	echo "Ispit je polozen!";
	echo "Cestitamo!";
	echo "</font>";
}

?>