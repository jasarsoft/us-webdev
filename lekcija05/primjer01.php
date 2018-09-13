<?php
    $naziv = 'Univerzitet Singidunum';
    
    echo 'Duzina string ' . $naziv . ' je ' . strlen($naziv) . "<br>";
    
    echo 'Broj elemenata je ' . count(explode(' ' , $naziv)) . '<br>';
    
    echo 'Prva 4 slova su ' . substr($naziv, 0, 4) . '<br>';
    
    echo 'Slova 4, 5 i 6 su: ' . substr($naziv, 3, 3) . '<br>';
    
    echo 'Sve od 12 slova pa na dalje je ' . substr($naziv, 12) . '<br>';
    
    echo 'Sve malim slovima: ' . strtolower($naziv) . '<br>';
    
    echo 'Sve velikim slovima: ' . strtoupper($naziv) . '<br>';
    
    $vrijeme = '2016-02-06 11:14:51'; #ISO format
    $unizVrijeme = strtotime($vrijeme);
    
    echo $unizVrijeme . ' je ' . $vrijeme . '<br>';
    