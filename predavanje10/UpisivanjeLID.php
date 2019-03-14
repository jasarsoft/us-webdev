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

// ako tabela koristi autoincrement, u ovom slucaju to je polje id, onda mozemo da vidimo 
// odmah nakon izvrsenja upita koji je to broj koji je poslednji upisan
if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo "Novi zapis je uspesno ubacen i poslednji ID je: " . $last_id;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// zatvaranje konekcije
$conn->close();
?>