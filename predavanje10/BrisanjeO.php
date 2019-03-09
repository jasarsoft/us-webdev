<?php
$servername = "localhost";
$username = "nebojsa";
$password = "sifra";
$dbname = "sii";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Neuspela konekcija: " . $conn->connect_error);
} 

// sql statement za  brisanje podataka
$sql = "DELETE FROM Test WHERE id=3";

if ($conn->query($sql) === TRUE) {
    echo "Slog izbrisan uspesno";
} else {
    echo "Greska u brisanju sloga " . $conn->error;
}

$conn->close();
?>
