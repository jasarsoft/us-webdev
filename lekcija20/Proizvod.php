<?php
    class Proizvod {
        protected $naslov;
        protected $opis;
        protected $cijena;
        
        function __construct($naslov, $opis, $cijena) {
            $this->naslov = $naslov;
            $this->opis = $opis;
            $this->cijena = $cijena;
        }
        
        function getNaslov() {
            return $this->naslov;
        }

        function getOpis() {
            return $this->opis;
        }

        function getCijena() {
            return $this->cijena;
        }

        function setNaslov($naslov) {
            $this->naslov = $naslov;
        }

        function setOpis($opis) {
            $this->opis = $opis;
        }

        function setCijena($cijena) {
            $this->cijena = $cijena;
        }


    }
