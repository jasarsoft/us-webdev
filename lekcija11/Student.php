<?php
    class Student {
        private $ime;
        private $prezime;
        private $brojIndexa;
        
        public function setIme($ime){
            if(preg_match('/^[A-z ŠĐČĆŽšđčćž]+$/', $ime)){
                $this->ime = $ime;
            }
        }
        
        public function setPrezime($prezime){
            if(preg_match('/^[A-z ŠĐČĆŽšđčćž\-]+$/', $prezime)){
                $this->prezime = $prezime;
            }
        }
        
        public function getIme() {
            return $this->ime;
        }

        public function getPrezime() {
            return $this->prezime;
        }

        public function getBrojIndexa() {
            return $this->brojIndexa;
        }

                public function __construct($ime, $prezime, $brojIndexa) {
            $this->setIme($ime);
            $this->setPrezime($prezime);
            $this->brojIndexa = $brojIndexa;
        }
        
        public function __destruct() {
            
        }
        
        
        
        
        public function godinaUpisa(){
            return substr($this->brojIndexa, 0, 4);
        }
        
        public function prikazi(){
            require 'student_view.php';
        }
    }
