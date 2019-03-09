<?php

// konekcija i zatvaranje konekcije ka lokalnoj bazi pomocu mysqli_connect funkcije
$link=mysqli_connect("localhost","nebojsa","sifra");
if(mysqli_close($link))
    echo "Konekcija je zatvorena" . "<br/>";
// konekcija i zatvaranje konekcije ka lokalnoj bazi pomocu mysqli klase
$link=new mysqli("localhost","nebojsa","sifra");
if($link->close())
    echo "Konekcija je zatvorena";
?>