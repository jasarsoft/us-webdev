<?php

class Vozilo{
    public $boja;
    public $tip;
}

class Automobil extends Vozilo{
    public function __construct() {
        $this->tip="automobil";
    }

    public function postaviBoju($boja){
        $this->boja=$boja;
    }

    public function prikaziBoju(){
        return $this->boja;
    }
}

class Kamion extends Vozilo{
    public function __construct() {
        $this->tip="kamion";
    }

    public function prikaziTip() {
        echo "Ovo je ", $this->tip;
    }
}

$automobil=new Automobil();
$automobil->postaviBoju("teget");
echo "Boja automobila je: ", $automobil->prikaziBoju();
echo "<br/>";
$kamion=new Kamion();
$kamion->prikaziTip();
 
?>