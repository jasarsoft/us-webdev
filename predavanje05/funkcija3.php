<?php

//funkcija sa default vrednoscu argumenta
function moja_funkcija($pice="Kisela voda") {
    echo $pice , "<br/>";
}

//stampa "Kisela voda"
moja_funkcija();

//stampa Espresso
moja_funkcija("Espresso");

?>