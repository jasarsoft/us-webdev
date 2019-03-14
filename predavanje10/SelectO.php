<?php
$servername = "localhost";
$username = "nebojsa";
$password = "sifra";
$dbname = "sii";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Neuspela konekcija: " . $conn->connect_error);
} 

$sql = "SELECT id, firstname, lastname, email FROM Test";
$result = $conn->query($sql);

// prvo proveravamo da li ima nekih rezultata
if ($result->num_rows > 0) {
    // prikazujemo podatke za svaki red u formi asocijativnog niza, gde su indeksi nazivi kolona
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. " Email: " . $row["email"] . "<br>";
    }
// u suprotnom poruka da nema rezultata
} else {
    echo "nema rezultata";
}
$conn->close();
?>