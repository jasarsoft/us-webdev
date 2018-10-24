<?php

class Osoba{
    public $ime;

    // metoda za postavljanje vrednosti u atribut ime
    public function postaviIme($ime){
        $this->ime=$ime;
    }

    public function prikaziIme(){
        return $this->ime;
    }
}

$ja=new Osoba();
$ja->postaviIme("Joe Doe");
echo "Moje ime je: ", $ja->prikaziIme();

?>