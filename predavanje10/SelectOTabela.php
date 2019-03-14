<?php
$servername = "localhost";
$username = "nebojsa";
$password = "sifra";
$dbname = "sii";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, firstname, lastname, email FROM Test";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th><th>Email </th></tr>";
    // prikaz rezultata za svaki red
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td><td>" . $row["email"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "Nema rezultata";
}
$conn->close();
?>