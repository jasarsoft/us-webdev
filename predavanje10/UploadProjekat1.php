<?php

define("fajloviProjekat","c:\\xampp\\htdocs\\projekti\\");

if(isset($_FILES['projekat'])){
    
    if(is_uploaded_file($_FILES['projekat']['tmp_name'])){
        
        if($_FILES['projekat']['type']!='application/pdf'){
            
            
            echo "<p> Projekat moze da bude samo u pdf formatu </p>";
        }
        
        else{
            
            $brojIndeksa=$_POST['brojIndeksa'];
            
            $rezultat=move_uploaded_file($_FILES['projekat']['tmp_name'],fajloviProjekat . "_$brojIndeksa.pdf");
            
            if($rezultat==1) echo "<p> Fajl je uspesno uploadovan</p>";
            else echo "<p> Fajl nije uploadovan, pokusajte ponovo</p>";            
        }
            
        }
    else echo "Greska!";
        
    }
else echo "Neka greska!";
    
    



   
   ?>
       

   