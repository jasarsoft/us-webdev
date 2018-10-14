<?php
    class Configuration{
        const DB_HOST = 'localhost';
        const DB_USER = 'root';
        const DB_PASS = 'singidunum';
        const DB_BASE = 'baza';
        
        private $podatak;
        public $javno;
        protected $zasticeno;
        
        function __construct($podatak, $javno, $zasticeno) {
            $this->podatak = $podatak;
            $this->javno = $javno;
            $this->zasticeno = $zasticeno;
        }
        function getPodatak() {
            return $this->podatak;
        }

        function getJavno() {
            return $this->javno;
        }

        function getZasticeno() {
            return $this->zasticeno;
        }

        function setPodatak($podatak) {
            $this->podatak = $podatak;
        }

        function setJavno($javno) {
            $this->javno = $javno;
        }

        function setZasticeno($zasticeno) {
            $this->zasticeno = $zasticeno;
        }
    }
    
    $c = new Configuration(1, 2, 5);