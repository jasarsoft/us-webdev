<!DOCTYPE html>
<html>
<head>
    <title> UNIVERZITET SINGIDUNUM </title>
</head>
<body>
    <?php
        // operatori prefiksnog i sufiksnog povecanja i smanjenja

        $a=5;
        echo ++$a; //operand $a se prvo povecava za 1, pa se prikazuje i ispisuje se 6
        echo "<br/>";

        $b=3;
        echo $b--; // operand $b se prvo prikazuje, pa se smanjuje za 1, ispisuje se 3.
        echo "<br/>";
        
        // operator referenca & (ampersand)
        $a=100;
        $b=$a;
        $a=101; // promenljiva $a ima vrednost 101, a $b i dalje ima vrednost 100

        $a=200;
        $b=&$a;
        $a=300; //promenljiva $a sada ima vrednost 300, ali i promenljiva $b, jer i $a i $b ukazuju na isto mesto u memoriji

        echo $b," ", $a;

        unset($a); //sada se ponistava veza izmedju $a i $b, ali $b i dalje ima vrednost 300
        echo "<br/>";
        echo $b;
    ?>
</body>
</html>