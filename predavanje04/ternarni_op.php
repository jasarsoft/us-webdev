<?php

$imenilac=0;
$brojilac=10;

$kolicnik=($imenilac==0)?'ne sme se deliti sa nulom':$brojilac/$imenilac;
echo $kolicnik;

$imenilac=10;
echo "<br/>";
$kolicnik=($imenilac==0)?'ne sme se deliti sa nulom':$brojilac/$imenilac;
echo $kolicnik;

?>