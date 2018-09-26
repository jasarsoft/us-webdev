<?php
    class KontaktPodaci {
        protected $imeIPrezime;
        protected $telefon;
        protected $email;
        
        function __construct($imeIPrezime, $telefon, $email) {
            $this->imeIPrezime = $imeIPrezime;
            $this->telefon = $telefon;
            $this->email = $email;
        }

        function getImeIPrezime() {
            return $this->imeIPrezime;
        }

        function getTelefon() {
            return $this->telefon;
        }

        function getEmail() {
            return $this->email;
        }

        function setImeIPrezime($imeIPrezime) {
            $this->imeIPrezime = $imeIPrezime;
        }

        function setTelefon($telefon) {
            $this->telefon = $telefon;
        }

        function setEmail($email) {
            $this->email = $email;
        }


    }
