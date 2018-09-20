<?php
    require 'Student.php';
    
    $s1 = new Student('Milan', 'Tair', '2008213514');
    
    $s1->prikazi();
    
    
    $s2 = new Student('Pera', 'Peric', '2015100100');
    
    $s2->prikazi();
    
    echo $s2->getBrojIndexa();