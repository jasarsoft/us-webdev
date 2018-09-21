<html>
<head>
    <title> Singidunum Univerzitet </title>
</head>

<body>
    <?php
        echo '<b> Svaka varijabla (promenljiva) u PHP-u pocinje sa znakom $ </b><br/>';

        echo '<b> String je niz karaktera i u PHP-u se deklarise apostrofom ili navodnicima<b><br/>';

        echo '<b> Kada vrednost promenljive u okviru Stringa treba da se prikaze, koriste se navodnici,
            onda se naziv promenljive zamenjuje sa njenom vrednoscu. U slucaju koriscenja apostrofa, prikazuje se
            samo naziv promenljive, ne njena vrednost.</b><br/>';

        $a=25;

        echo "Prikazujemo sada vrendnost promenljive $a <br/>";
        echo 'Sada prikazujemo naziv promenljive $a <br/>';
?>
</body>
</html>