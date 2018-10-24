<?php

interface Car { 
    public function setModel($name);
    public function getModel();
}

class myCar implements Car {
    private $model; 
   
    public function setModel($name){ 
        $this -> model = $name; 
    }
  
    public function getModel(){
        return $this -> model; 
    }
}

$car=new myCar();
$car->setModel("Volvo");
echo "Ja vozim ", $car->getModel();

?>