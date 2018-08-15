<html>

<head>
    <title> Singidunum Univerzitet </title>
</head>

<body>
    <?php
        echo '<b> PHP je jezik sa slabom proverom tipa podataka (eng. Loosely Typed), sto znaci
            da prilikom deklaracije varijable, ne treba da se deklarise njen tip </b> <br/>';
        
        $ime="Petar"; //promenljiva $ime je tipa string
        $godine=25; // promenljiva godine je tipa int
        $godine="DANAS JE NEOBICAN DAN"; //promenljiva godine je sada tipa string

        echo '<b> pomocu operatora za konverziju tipova moze se jedan tip promenljive konvertovati u drugi tip </b><br/>';

        $broj=25; // promenljiva broj je tipa int
        $realan_broj=(double)$broj; //promenljiva $realan_broj je tipa double

        echo 'Vrednost promenljive $broj je ', "$broj<br/>";
        echo 'Vrednost promenljive $realan_broj je ', "$realan_broj";
?>
</body>
</html>