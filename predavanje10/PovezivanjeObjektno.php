<?php

$servername="localhost";
$user="nebojsa";
$password="sifra";

$conn=new mysqli($servername,$user,$password);
if ($conn->connect_error) {
    die("Konekcija nije uspela:" . $conn->connect_error);
} 
else{
    
    echo "Povezivanje uspesno!";
}

?>