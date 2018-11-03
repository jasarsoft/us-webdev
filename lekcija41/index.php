<?php
//    $jsonString = file_get_contents("data/studenti.json");
//    $json = json_decode($jsonString);
//    
//    echo '<pre>';
//    print_r($json);
    
//    echo $json->telefoni[0]->broj;
    
//    foreach ($json->telefoni as $telefon) {
//        echo '<a href="tel:' . $telefon->broj . '">' . $telefon->broj . '</a><br>';
//    }
    
//    foreach ($json->adrese as $adresa) {
//        echo $adresa->ime_ulice . ' ' . $adresa->broj_zgrade . '<br>';
//        echo $adresa->pak . '<br>';
//        $a = '@interfon';
//        echo "Zvonite na interfon: " . $adresa->$a;
//    }
    
//    foreach ($json as $student) {
//        echo "{$student->forename} {$student->surname}: ";
//        echo '<a href="mailto:' . $student->email . '">' . $student->email . '</a> (' . $student->email_type . ')'; 
//        echo '<br>';
//    }

    class Student {
        public $ime;
        public $prezime;
        public $indeks;
        
        function __construct($ime, $prezime, $indeks) {
            $this->ime = $ime;
            $this->prezime = $prezime;
            $this->indeks = $indeks;
        }
    }
    
    $studenti = [];
    $studenti[] = new Student("A", "B", "1");
    $studenti[] = new Student("C", "D", "2");
    $studenti[] = new Student("E", "F", "3");
    
    $json = json_encode($studenti);
    # echo $json;
    
    $noviStudent = json_decode($json);
    echo '<pre>';
    print_r($noviStudent);
    
    
    $student = new Student("AA", "BB", "11");
    $json = json_encode($student);
    
    $noviStudent = json_decode($json);
    echo $noviStudent->indeks;