<?php
    function __autoload($imeKlase) {
        if (preg_match('/^([A-Z][a-z]+)+Controller$/', $imeKlase)) {
            require_once 'app/controllers' . $imeKlase . '.php';
        } elseif (preg_match('/^([A-Z][a-z]+)+Model$/', $imeKlase)) {
        require_once 'app/models/' . $imeKlase . '.php';
        } elseif ($imeKlase === 'Misc' or $imeKlase === 'DataBase' or $imeKlase === 'Controller' or $imeKlase === 'ModelInterface') {
            require_once 'sys/' . $imeKlase . '.php';
        } elseif ($imeKlase === 'Configuration') {
            require_once $imeKlase . '.php';
        }
    }