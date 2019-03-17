<?php

session_name("nasaSesija");
session_start();

echo "Korisnicko ime: " . $_SESSION['username'] . "<br/>";
echo "ID sesije: " . session_id() . "<br/>";
echo "Ime sesije: " . session_name() . "<br/>";


?>