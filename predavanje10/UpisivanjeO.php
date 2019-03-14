<?php
$servername = "localhost";
$username = "nebojsa";
$password = "sifra";
$dbname = "sii";

// kreiranje konekcije
$conn = new mysqli($servername, $username, $password, $dbname);
// provera konekcije
if ($conn->connect_error) {
    die("Neuspela konekcija:" . $conn->connect_error);
} 

$sql = "INSERT INTO Test (firstname, lastname, email)
VALUES ('John', 'Doe', 'example@singidunum.ac.rs')";

if ($conn->query($sql) === TRUE) {
    echo "Novi zapis je uspesno ubacen";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// zatvaranje konekcije
$conn->close();
?>