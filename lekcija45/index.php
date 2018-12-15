<?php
    require_once 'sys/Autoloader.php';
    
    Session::begin();
    
    $Request = $_SERVER['REQUEST_URI'];
    $Request = substr($Request, strlen(Configuration::PATH));
    
    $Routes = require_once 'Reoutes.php';
  
    $Arguments = [];
    $FoundRoute = null;
    foreach ($Routes as $Route) {
        if (preg_match($Route['Pattern'], $Request, $Arguments)) {
            $FoundRoute = $Route;
            break;
        }     
    }
    
    unset($Arguments[0]);
    $Arguments = array_values($Arguments);
       
    $controllerPath = 'app/controllers/' . $FoundRoute['Controller'] . 'Controller.php';
    if(!file_exists($controllerPath)){
        die('Controller class does not exist.');
    }
    
    #ukljucivanje koda izabrane klase
    require_once $controllerPath;
    
    $imeKlase = $FoundRoute['Controller'] . 'Controller';
    $worker = new $imeKlase;
    
    if (method_exists($worker, '__pre')){
        call_user_func([$worker, '__pre']);
    }
    
    if(method_exists($worker, $FoundRoute['Method'])){
        $methodName = $FoundRoute['Method'];
        call_user_func_array(array($worker, $methodName), $Arguments);
    } else {
       die('This controller does not have the requested method.'); 
    }
         
    #preuzimanje podataka
    $DATA = $worker->getData();
    
    if ($worker instanceof ApiController) {
        ob_clean();
        header('Content-type: text/json; charset=utf-8');
        header('Access-Control-Allow-Origin: *');
        echo json_encode($DATA);
        exit;
    }
    
    #ucitavanje sablona za taj metod
    require 'app/views/' . $FoundRoute['Controller'] . '/' . $FoundRoute['Method'] . '.php';
    
    