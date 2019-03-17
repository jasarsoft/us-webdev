<?php

session_name("nasaSesija");
session_id('ajf923kflsk');
session_start();

$_SESSION['username']="nebojsa";

echo "Korisnicko ime: " . $_SESSION['username'] . "<br/>";
echo "ID sesije: " . session_id() . "<br/>";
echo "Ime sesije: " . session_name() . "<br/>";

?>