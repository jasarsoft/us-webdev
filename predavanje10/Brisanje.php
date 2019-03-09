<?php
$servername = "localhost";
$username = "nebojsa";
$password = "sifra";
$dbname = "sii";

// Kreiranje konekcije
$conn = new mysqli($servername, $username, $password, $dbname);
// Provera konekcije
if ($conn->connect_error) {
    die("Konekcija nije uspela " . $conn->connect_error);
} 

// sql za brisanje zapisa
$sql = "DELETE FROM departments WHERE DepartmentID=3";

if ($conn->query($sql) === TRUE) {
    echo "Zapisi su uspesno obrisani!";
} else {
    echo " Greska u brisanju zapisa " . $conn->error;
}

// zatvaranje konekcije
$conn->close();
?>