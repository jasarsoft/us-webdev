<!DOCTYPE html>

<?php
    //prihvatanje podataka iz HTML forme
    $ime=$_POST['ime'];
    $prezime=$_POST['prezime'];
    $placanje=$_POST['placanje'];
    $kolicina=$_POST['kolicina'];
    define('ETHCENA', 850);
?>

<html>
<head>
    <title> Potvrda o transakciji </title>
</head>
<body>

<?php
    // iznos je cena u dolarima - broj ETH*cena po jednoj jedinici
    $iznos=$kolicina*ETHCENA;

    echo "<h1> Potvrda o transakciji </h1> <br/>";
    if($kolicina>0) {
        echo "<b> Ime: </b> ", $ime, "<br/>";
	echo "<b> Prezime: </b> ", $prezime, "<br/>";
	echo "<b> Nacin placanja: </b> ", $placanje, "<br/>";
	echo "<b> Broj kupljenih ETH: </b> ", $kolicina, "<br/>";
	echo "<b> Trenutna cena: </b>", ETHCENA, " USD<br/>";
	echo "<b> Iznos transakcije u dolarima: </b> <font color=\"red\"> ", $iznos, " USD</font><br/>";
	echo "<b> Vreme transakcije </b>", date('H:i, jS F');
    } else {
        echo "<font color=\"red\"><b> NISTE KUPILI ETH, NE POSTOJI TRANSAKCIJA </font></b>";	
    }
?>

</body>
</html>
