<?php
    $string = file_get_contents('data/configuration.xml');
    
    $xml = simplexml_load_string($string);
    
    echo $xml->db_name;