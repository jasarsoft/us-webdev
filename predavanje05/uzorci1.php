<?php
    $pattern = "/^N/";
    $names = array("Nebojsa", "Nikolina", "Marko", "Mitar", "Petar", "Nadica");
    $matches = preg_grep($pattern, $names);
 
    // Loop through matches array and display matched names
    foreach($matches as $match){
        echo $match . "<br>";
    }
    
?>