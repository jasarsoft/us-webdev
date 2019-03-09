<?php

$host='localhost';
$user='nebojsa';
$password='sifra';
$db='sii';

$objekat=new mysqli($host,$user,$password,$db) or die();
echo "Konektovani smo <br/>";
// brisemo tabelu profesori ako postoji
$sql='DROP TABLE IF EXISTS Professors';
$objekat->query($sql) or die();
// kreiranje upita za kreiranje tabele
$sql='CREATE TABLE Professors 
    (ProfessorID int AUTO_INCREMENT, 
    FirstName varchar(255) NOT NULL, 
    LastName varchar(255) NOT NULL, 
    City varchar(255), 
    department int, 
    CONSTRAINT FK_Professors_Departments FOREIGN KEY(department) 
    REFERENCES departments(departmentID), CONSTRAINT PK_Professors PRIMARY KEY(ProfessorID))';

$objekat->query($sql) or die('Ne moze da se kreira tabela');
echo 'Tabela je uspesno kreirana <br/>';

?>