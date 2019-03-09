<?php

$host='localhost';
$user='nebojsa';
$password='sifra';
$db='sii';

$objekat=new mysqli($host,$user,$password,$db) or die();
echo "Konektovani smo <br/>";

$sql='SELECT DepartmentID,DepartmentName,DepartmentLocation FROM departments';

// mestanje podataka (rezultata upita) u asocijativni niz $rez

$rez=$objekat->query($sql) or die();
echo "podaci su preuzeti <br/>";

while($red=$rez->fetch_assoc()){
    
    echo "ID departmana: " . $red['DepartmentID'] . " " . " Naziv departmana: " . $red['DepartmentName'] . " Lokacija departmana: " . $red['DepartmentLocation'];
    echo "<br/>";
}

$objekat->close();


?>