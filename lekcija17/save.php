<?php
    if($_POST){
        echo 'Poslato je ' . count($_POST) . ' elemenata u formularu.';
        //echo '<pre>';
        //print_r($_POST);
        
        //$filename = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        
        $filename = $_POST['email']; //LOS
        $filename = str_replace('@', '+', $filename);   
        $filename .= '.json'; 
        
        $data = [
            'forename'  => $_POST['forename'],
            'surname'  => $_POST['surname'],
            'birthday'  => $_POST['birthday'],
            'education_level'  => $_POST['education_level'],
            'position'  => $_POST['position'],
            'phone'  => $_POST['phone'],
            'email'  => $_POST['email'],
            'postal_address'  => $_POST['postal_address']
        ];
        
        $json = json_encode($data, JSON_PRETTY_PRINT);
        file_put_contents($filename, $json);
        
        echo 'Podaci su sacuvani, hvala.';
    } else {
        echo 'Morate da popunite formular ';
        echo '<a href="index.php">ovom linku</a>';
    }