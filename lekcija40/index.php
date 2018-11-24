<?php
    $jsonString = file_get_contents("data/configuration.json");
    $json = json_decode($jsonString);
    
    echo '<pre>';
    print_r($json);
    
    echo $json->db_name;
    
    $db = new PDO($json->db_type . ':host=' . $json->db_host . ';dbname=' . $json->db_name, $json->db_user, $json->db_pass);
    
    