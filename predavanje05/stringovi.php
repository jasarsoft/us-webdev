<?php
    $str = "Hello world. It's a beautiful day.";
    print_r (explode(" ",$str));

    $str = "Hello World!";
    echo $str . "<br/>";
    echo "<br/>";
    
    echo rtrim($str,"World!");
    echo "<br/>";
    
    echo strtoupper("Hello WORLD!");
    echo "<br/>";
    
    echo strtolower("HELLO WORLD!");

?>