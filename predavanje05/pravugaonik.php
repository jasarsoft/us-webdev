<?php

class Pravougaonik{
    // definisanje atributa
    public $strana1;
    public $strana2;

    // kreiranje konstruktora
    function __construct($a,$b){
        $this->strana1=$a;
        $this->strana2=$b;
    }

    //metoda za izracunavanje obima
    public function izracunajObim() {
        return (($this->strana1 + $this->strana2)*2);
    }

    //metoda za izracunavanje povrsine
    public function izracunajPovrsinu(){
        return ($this->strana1*$this->strana2);
    }
}

// kreiranje instance klase Pravouganik
$primerPravougaonika=new Pravougaonik(20,20);
echo "Povrsina je: ", $primerPravougaonika->izracunajPovrsinu(); 
echo "<br/>";

echo "Obim je: ", $primerPravougaonika->izracunajObim(); 
echo "<br/>";

?>