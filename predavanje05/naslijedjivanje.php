<?php

class JednostavnaKlasa {
    public $promenljiva="ovo je vrednost iz roditeljske klase";
    
    public function prikazi(){
        // prikazuje vrednost atributa promenljiva
        echo $this->promenljiva;
    }
}

// klasa ProsirenaKlasa nasledjuje klasu JednostavnaKlasa
class ProsirenaKlasa extends JednostavnaKlasa {
    // ova klasa redefinise metodu prikazi() u roditeljskoj klasi

    public function prikazi(){
        echo "pozivamo metodu iz roditeljske klase sa istim nazivom <br/>";

        parent::prikazi();
    }
}

// kreiramo objekat klase ProsirenaKlasa
$primer=new ProsirenaKlasa();

// pozivamo metodu prikazi() objekta $primer
$primer->prikazi();

?>