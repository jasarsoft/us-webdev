<?php
    //$c = mysql_connect('localhost', 'root', 'root');
    //mysql_select_db('test', $c);
    //mysql_query("";

    $db = new PDO('mysql:host=localhost;dbname=baza;charset=utf8', 'root', 'root');
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    
    /*$pol = $_GET['geneder'];
    if(!in_array($pol, ['female', 'male'])){
        $pol = 'female';
    }
    $SQL = "SELECT * FROM student WHERE gender = '{$pol}' ORDER BY forename, surname;";
    $res = mysql_query($SQL);*/
    
    $prep = $db->prepare('INSERT INTO student (forename, surname, gender) VALUES (?, ?, ?);');
    $res = $prep->execute(
        [
            'Milan',
            'Tair',
            'male'
        ]
    );
    
    if($res){
        echo 'Dodao sam novog studenta.<br>';
    } else {
        echo 'Doslo je do greske prilikom dodavanja novog studenta.<br>';
    }

    $prep = $db->prepare('SELECT * FROM student WHERE gender = ? ORDER BY forename, surname;');
    $prep->execute( ['male'] );
    $studenti = $prep->fetchAll(PDO::FETCH_OBJ);
    
    foreach ($studenti as $student){
        echo $student->forename, ' ', $student->surname, '<br>';
    }