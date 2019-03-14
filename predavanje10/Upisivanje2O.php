<?php
$servername = "localhost";
$username = "nebojsa";
$password = "sifra";
$dbname = "sii";

// kreiranje konekcije
$conn = new mysqli($servername, $username, $password, $dbname);
// provera konekcije
if ($conn->connect_error) {
    die("Neuspela konekcija " . $conn->connect_error);
} 

$sql = "INSERT INTO Test (firstname, lastname, email)
VALUES ('John', 'Doe', 'singidunum@example.com');";
$sql .= "INSERT INTO Test (firstname, lastname, email)
VALUES ('Marko', 'Markovic', 'marko@example.com');";
$sql .= "INSERT INTO Test (firstname, lastname, email)
VALUES ('Milena', 'Milenkovic', 'milena@example.com')";
// izvrsavamo multi query
if ($conn->multi_query($sql) === TRUE) {
    echo "Vise slogova je upisano!";
} else {
    echo "Greska: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>