<?php
    
class Poseta{
    private static $posetioci = 0; 
        
    function __construct(){
        self::$posetioci++;
    }
        
    static function izbrojPosetioce(){
        // pomocu naredbe self:: poziva se staticki atribut
        return self::$posetioci;
    }
}

    $posete = new Poseta();
    echo Poseta::izbrojPosetioce()."<br />";

    $posete2 = new Poseta();
    echo Poseta::izbrojPosetioce()."<br />";
    echo $posete -> izbrojPosetioce();

?>