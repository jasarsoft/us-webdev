<?php
    $db = new PDO('mysql:host=localhost;dbname=baza;charset=utf8', 'root', 'root');
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    
    $prep = $db->prepare('DELETE FROM student WHERE student_id = ?;');
    $res = $prep->execute(
        [
            '1'
        ]
    );
    
    if($res){
        echo 'Izmjenili smo podatke studenta.<br>';
    } else {
        echo 'Doslo je do greske prilikom izmjeen podataka studenta.<br>';
    }