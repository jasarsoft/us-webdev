<?php
    require_once 'sys/Autoloader.php';

    #dispecer
    if(!isset($_GET['Controller']) or !preg_match('/^([A-Z][a-z]+)+$/', $_GET['Controller']) or !$_GET['Controller']){
        $_GET['Controller'] = 'Products';
    }
    
    if(!isset($_GET['Method']) or !preg_match('/^[a-z]+([A-Z][a-z]*)*$/', $_GET['Method']) or !$_GET['Method']){
        $_GET['Method'] = 'index';
    }
    
    $controllerPath = 'app/controllers/' . $_GET['Controller'] . 'Controller.php';
    if(!file_exists($controllerPath)){
        die('Controller class does not exist.');
    }
    
    #ukljucivanje koda izabrane klase
    require_once $controllerPath;
    
    $imeKlase = $_GET['Controller'] . 'Controller';
    $worker = new $imeKlase;
    
    if(!method_exists($worker, $_GET['Method'])){
        die('This controller does not have the requested method.');
    }
     
    #izvrsavanje izabranog metoda izabrane klase
    $worker->{$_GET['Method']}();
    
    #preuzimanje podataka
    $DATA = $worker->getData();
    
    #ucitavanje sablona za taj metod
    require 'app/views/' . $_GET['Controller'] . '/' . $_GET['Method'] . '.php';
    
    