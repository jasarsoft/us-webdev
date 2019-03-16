<?php
$cookie_name="korisnik";
// postavljanje vremena isteka na pre jedan sat od trenutnog vremena
setcookie("korisnik", "", time() - 3600);
?>
<html>
<body>

<?php
echo "Kolacic je obrisan!";

?>

</body>
</html>