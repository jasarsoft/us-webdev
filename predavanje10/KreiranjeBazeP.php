<?php
$servername = "localhost";
$username = "nebojsa";
$password = "sifra";

// kreiranje konekcije
$conn = mysqli_connect($servername, $username, $password);
// provera konekcije
if (!$conn) {
    die("Ne mozemo da se povezemo " . mysqli_connect_error());
}

// brisanje baze ako postoji

$sql="DROP DATABASE IF EXISTS myDB";
mysqli_query($conn,$sql);

// kreiranje baze
$sql1 = "CREATE DATABASE myDB";
if (mysqli_query($conn, $sql1)) {
    echo "Baza uspesno kreirana";
} else {
    echo "Greska u kreiranju baze" . mysqli_error($conn);
}

// gasenje konekcije
mysqli_close($conn);
?>
