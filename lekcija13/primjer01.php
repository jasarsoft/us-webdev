<?php
    class Osoba{
        private $ime;
        private $prezime;
        private $jmbg;
        
        public function __construct($ime, $prezime, $jmbg){
            $this->setIme($ime);
            $this->setPrezime($prezime);
            $this->setJmbg($jmbg);
        }
        
        function getIme() {
            return $this->ime;
        }

        function getPrezime() {
            return $this->prezime;
        }

        function getJmbg() {
            return $this->jmbg;
        }

        function setIme($ime) {
            if(preg_match('/^[A-z ŠĐČĆŽšđčćž]+/', $ime)){
                $this->ime = $ime;
            }
        }

        function setPrezime($prezime) {
            if(preg_match('/^[A-z ŠĐČĆŽšđčćž\-]+/', $prezime)){
                $this->prezime = $prezime;
            }
        }

        function setJmbg($jmbg) {
            if(preg_match('/^[0-9]{13}/', $jmbg)){
                $this->jmbg = $jmbg;
            }
        }
    }
    
    class Studnet extends Osoba {
        private $brojIndeksa;
        
        function __construct($ime, $prezime, $jmbg, $brojIndeksa) {
            parent::__construct($ime, $prezime, $jmbg);
            $this->setBrojIndeksa($brojIndeksa);
        }

        
        function getBrojIndeksa() {
            return $this->brojIndeksa;
        }

        function setBrojIndeksa($brojIndeksa) {
            if(preg_match('/^[0-9]{10}$/', $brojIndeksa)){
                $this->brojIndeksa = $brojIndeksa;
            }
        }


    }
    
    
    $s = new Studnet('Pera', 'Peric', '1234567890123', '2005300400');
    
    print_r($s);
    
    echo $s->getJmbg();