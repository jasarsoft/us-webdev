<?php

session_start();

echo "Vase korisnicko ime je: " . $_SESSION["username"] . " <br/>";
echo session_name() . "<br/>";
echo session_id() . "<br/>";

?>