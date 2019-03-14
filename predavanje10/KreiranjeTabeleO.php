<?php
$servername = "localhost";
$username = "nebojsa";
$password = "sifra";
$dbname = "sii";

// kreiranje konekcije
$conn = new mysqli($servername, $username, $password, $dbname);
// provera konekcije
if ($conn->connect_error) {
    die("Konekcija nije uspela " . $conn->connect_error);
} 

$sql="DROP TABLE IF EXISTS Test";
// brisemo tabelu test ako postoji
$conn->query($sql);

// sql za krairanje tablele
$sql1 = "CREATE TABLE Test (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";

if ($conn->query($sql1) === TRUE) {
    echo "Tabela Test uspesno kreirana";
} else {
    echo "Greska u kreiranju tabele: " . $conn->error;
}

$conn->close();
?>