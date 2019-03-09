<?php
// u primeru se prvo cita samo jedna linija fajla
// koristi se read mode
$file=fopen("recnik.txt","r");
echo fgets($file) . "<br/>";
//zatvaramo fajl
fclose($file);
// sada citamo ceo fajl uz pomoc fread() funkcije
$file=fopen("recnik.txt","r");
echo fread($file,filesize("recnik.txt"));
fclose($file);

?>
