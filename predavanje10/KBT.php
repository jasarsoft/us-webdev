<?php

$host='localhost';
$user='nebojsa';
$password='sifra';
$db='sii';

$link=mysqli_connect($host,$user,$password,$db) or die('Greska! Ne mozemo da se konektujemo na bazu');
$sql='DROP TABLE IF EXISTS Professors';
mysqli_query($link,$sql);
$sql='CREATE TABLE Professors 
(ProfessorID int AUTO_INCREMENT, FirstName varchar(255) NOT NULL, LastName varchar(255) NOT NULL, 
City varchar(255), 
department int, CONSTRAINT FK_Professors_Departments FOREIGN KEY(department) 
REFERENCES departments(departmentID), CONSTRAINT PK_Professors PRIMARY KEY(ProfessorID))';

mysqli_query($link,$sql) or die('Ne moze da se kreira tabela');
echo 'Tabela je uspesno kreirana <br/>';

?>