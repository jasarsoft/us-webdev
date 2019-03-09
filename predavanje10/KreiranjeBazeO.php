<?php

$servername="localhost";
$user="nebojsa";
$password="sifra";

$conn=new mysqli($servername,$user,$password);

if($conn->connect_error){
    die("ne mozemo da se povezemo " . $conn->connect_error);
}
else{
    echo "povezivanje je uspesno <br/>";
}

$query='DROP DATABASE IF EXISTS myDB'; 
$query1='CREATE DATABASE myDB';

$conn->query($query);

if($conn->query($query1)==1){
    echo "uspesno kreirana baza";
}
else{
    echo "baza ne moze da se kreira " . $conn->error;
}

// zatvaramo konekciju
$conn -> close();


?>