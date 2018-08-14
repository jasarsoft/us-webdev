<!DOCTYPE html>
<html>
<head>
    <title> Operatori 1 </title>
</head>
<body>
    <?php
        // operator nadovezivanja znakovnih vrednosti

        $a="Danas";
        $b="lep dan";
        $rezultat=$a. " je ". $b;

        echo 'Rezultat nadovezivanja operanada $a i $b ', "sa vrednostima $a i $b je ", $rezultat, "<br/>";  

        $rezultat=($a=5)+($b=3);

        echo 'Rezultat sabiranja operanada $a i $b ', "sa vrednostima $a i $b je ", $rezultat, "<br/>";  

        // kombinovani operatori dodele

        $a=5;
        $b=3;
        $a+=$b;

        echo 'Rezultat kombinovanog operatora += $a+=$b ', "sa vrednostima 5 i 3 je ", $a, "<br/>";  

        $a=5;
        $b=3;
        $a%=$b;

        echo 'Rezultat kombinovanog operatora %= $a%=$b ', "sa vrednostima 5 i 3 je ", $a, "<br/>";  
    ?>
</body>
</html>