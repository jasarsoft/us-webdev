<?php
    class VebStranica {
        protected $seoNaslov;
        protected $seoKljucneRijeci;
        protected $seoOpisStranice;
        
        protected $naslov;
        protected $sadrzaj;
        
        protected $tipStranice; #tekst, prizvodi, kontakt
        protected $posebanSadrzaj;
        
        protected $jezik = 'sr'; # sr, en
        protected $ikonica;
        
        function __construct($seoNaslov, $seoOpisStranice, $naslov, $tipStranice) {
            $this->seoNaslov = $seoNaslov;
            $this->seoOpisStranice = $seoOpisStranice;
            $this->naslov = $naslov;
            $this->tipStranice = $tipStranice;
        }
        
        function getSeoNaslov() {
            return $this->seoNaslov;
        }

        function getSeoKljucneRijeci() {
            return $this->seoKljucneRijeci;
        }

        function getSeoOpisStranice() {
            return $this->seoOpisStranice;
        }

        function getNaslov() {
            return $this->naslov;
        }

        function getSadrzaj() {
            return $this->sadrzaj;
        }

        function getTipStranice() {
            return $this->tipStranice;
        }

        function getPosebanSadrzaj() {
            return $this->posebanSadrzaj;
        }

        function getJezik() {
            return $this->jezik;
        }

        function getIkonica() {
            return $this->ikonica;
        }

        function setSeoNaslov($seoNaslov) {
            $this->seoNaslov = $seoNaslov;
        }

        function setSeoKljucneRijeci($seoKljucneRijeci) {
            $this->seoKljucneRijeci = $seoKljucneRijeci;
        }

        function setSeoOpisStranice($seoOpisStranice) {
            $this->seoOpisStranice = $seoOpisStranice;
        }

        function setNaslov($naslov) {
            $this->naslov = $naslov;
        }

        function setSadrzaj($sadrzaj) {
            $this->sadrzaj = $sadrzaj;
        }

        function setTipStranice($tipStranice) {
            if(in_array($tipStranice, ['tekst', 'proizvodi', 'kontakt']))
            {
                $this->tipStranice = $tipStranice;
            } else {
                $this->tipStranice = 'tekst';
            }
        }

        function setPosebanSadrzaj($posebanSadrzaj) {
            $this->posebanSadrzaj = $posebanSadrzaj;
        }

        function setJezik($jezik) {
            if(in_array($jezik, ['sr', 'en'])){
                $this->jezik = $jezik;
            } else {
                $this->jezik = 'sr';
            }
        }

        function setIkonica($ikonica) {
            $this->ikonica = $ikonica;
        }

        public function generisiHTML(){
            require 'sablon_stranice.php';
        }
    }
