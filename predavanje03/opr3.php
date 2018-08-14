<!DOCTYPE html>
<html>
<head>
    <title> Operatori 3 </title>
</head>
<body>
<?php
    // OPERATORI POREDJENJA
    $x = 4;
    $y = 1;
    $z = $x > $y;
    $e = $x == $y;
    
    echo " z = ", $z, "<br />" ;
    echo " e = ", $e;
    echo "<br/>";

    // LOGICKI OPERATORI
    $a = true;
    $b = false; 
    $c = $a || $b; 
    $d = $a && $b;
    $f = (!$a && $b) || ($a && !$b); 
    $g = !$a;
    $h=$a xor $b;
    
    echo " a = ", $a, " <br /> " ;
    echo " b = ", $b , "<br />" ;
    echo " c = ", $c , "<br />" ;
    echo  " d = " , $d , "<br />" ;
    echo  " f = " , $f , "<br />" ;
    echo  " g = " ,  $g, "<br/>";
    echo  " h = " ,  $h, "<br/>";
?>
</body>