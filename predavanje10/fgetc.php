<?php
//otvaramo fajl
$myFile=fopen("recnik.txt","r");
// citamo karakter po karakter do kraja
while(!feof($myFile)){
    
    echo fgetc($myFile) . " ";
}

// zatvaramo fajl

fclose($myFile);