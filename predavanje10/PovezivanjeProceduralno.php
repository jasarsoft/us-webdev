<?php
$servername = "localhost";
$username = "nebojsa";
$password = "sifra";

// kreiranje konekcije

$conn=mysqli_connect($servername,$username,$password);

if(!$conn){
    
    die("Ne mozemo da se povezemo" . mysqli_connect_error());
}

else {
    
    echo "Konekcija je uspesno realizovana";
}


?>