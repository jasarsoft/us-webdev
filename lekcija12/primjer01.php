<?php
    interface IgracUSvijetu {
        public function proracunStanja($time);
        public function osvjeziStanje();
    }
    
    class Igrac implements IgracUSvijetu {
        public function osvjeziStanje(){
            echo 'Osvjeszavam stanje igraca.<br>';
        }
        
        public function proracunStanja($time){
            echo "Proracunavam x, y i z koordinate u vremen {$time}.<br>";
        }
        
        public function stampaj(){
            echo 'Ja sam igrac u svijetu.<br>';
        }
    }
    
    $niz = [];
    $niz[] = new Igrac();
    $niz[] = new Igrac();
    $niz[] = new Igrac();
    $niz[] = new Igrac();
    $niz[] = new Igrac();
    
    class Svijet {
        static function prikazi($igrac){
            //...
        }
    }
    
    foreach($niz as $igrac){
        if($igrac instanceof Igrac){
            $igrac->proracunStanja(time());
            $igrac->osvjeziStanje();
            $igrac->stampaj();
            Svijet::prikazi($igrac);
        }
    }
    
    echo 'Kraj.';