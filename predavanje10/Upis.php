<?php

$host='localhost';
$user='nebojsa';
$password='sifra';
$db='sii';

$objekat=new mysqli($host,$user,$password,$db) or die();
echo "Konektovani smo <br/>";
// ubacivanje podataka preko klasa
$sql="INSERT INTO departments VALUES (2,'Informatics and Computing', 'Kumodraska 261/floor2')";
$objekat->query($sql) or die();
echo "podaci su uspesno ubaceni <br/>";

// ubacivanje podataka preko funkcija
$link=mysqli_connect($host,$user,$password,$db) or die();
echo "Konekcija je uspostavljena <br/>";
$sql="INSERT INTO departments VALUES (3,'Electrical Engineering', 'Kumodraska 261/floor3')";
mysqli_query($link,$sql) or die();
echo "podaci su uspesno ubaceni <br/>";



?>