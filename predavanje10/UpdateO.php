<?php
$servername = "localhost";
$username = "nebojsa";
$password = "sifra";
$dbname = "sii";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Neuspela konekcija " . $conn->connect_error);
} 
// sql update upit
$sql = "UPDATE Test SET lastname='Doe' WHERE id=2";

if ($conn->query($sql) === TRUE) {
    echo "Uspesno updateovani slogovi";
} else {
    echo "Greska u update slogova" . $conn->error;
}

$conn->close();
?>