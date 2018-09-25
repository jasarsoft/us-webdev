<?php

// FUNKCIJE ZA RAD SA PROMENLJIVAMA

$a=25;
echo gettype($a), "<br/>"; // rezultat koji funkcija vraca je integer

settype($a,"string"); // postavlja tip promenljive $a na string

echo is_numeric($a), "<br/>"; // vraca 1, znaci tacno
echo is_string($a), "<br/>"; // vraca 1
echo is_resource($a),"<br/>"; // ne vraca nista, znaci netacno
echo is_null($a),"<br/>"; // ne vraca nista, znaci netacno

$b="Danas je lep dan";
echo is_numeric($b),"<br/>"; // ne vraca nista, znaci netacno
echo is_numeric("test"); // ne vraca nista, znaci netacno