<?php
$servername = "localhost";
$username = "nebojsa";
$password = "sifra";
$dbname = "sii";


$conn = new mysqli($servername, $username, $password, $dbname);

// upiti sa pripremnjenim (eng. prepared) nardbama su brzi i efikasniji
// vezivanje parametara
if ($conn->connect_error) {
    die("Greska u konekciji: " . $conn->connect_error);
}

// pripremi upit i povezi parametre
$stmt = $conn->prepare("INSERT INTO Test (firstname, lastname, email) VALUES (?, ?, ?)");
// "sss" pokazuje o kojim tipovima parametara se radi, konkretno upisujemo 3x string, pa zato "sss"
$stmt->bind_param("sss", $firstname, $lastname, $email);

// set parameters and execute
$firstname = "John";
$lastname = "Doe";
$email = "singidunum@example.com";
$stmt->execute();

$firstname = "Milena";
$lastname = "Milenkovic";
$email = "milena@example.com";
$stmt->execute();

$firstname = "Marko";
$lastname = "Markovic";
$email = "marko@example.com";
$stmt->execute();

echo "Novi zapisi su uspesno ubaceni!";

$stmt->close();
$conn->close();
?>