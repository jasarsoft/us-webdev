<?php

// FUNKCIJE ZA RAD SA PROMENLJIVAMA

$a=102;
echo isset($a),"<br/>"; // vraca true

unset($a); //sada ponistavamo definiciju promenljive

echo isset($a),"<br/>"; // ne vraca nista, tj. false

$b=25;

echo empty($b),"<br/>"; // ne vraca nista, tj. false

echo empty($c),"<br/>"; // vraca 1

?>
