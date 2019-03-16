<?php
setcookie("kuki['jedan']","cookie jedan");
setcookie("kuki['dva']","cookie dva");

if(isset($_COOKIE['kuki'])){
    foreach($_COOKIE['kuki'] as $index=>$vrednost){
        echo $index . " " . $vrednost . "\n<br/>";
    }
    
}

?>