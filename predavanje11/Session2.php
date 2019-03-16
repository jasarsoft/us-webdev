<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Prikazujemo session promenljive iz primera Session1.php
echo "Omiljena boja je: " . $_SESSION["omiljenaboja"] . ".<br>";
echo "Omiljena zivotinja je:" . $_SESSION["omiljenazivotinja"] . ".";
?>

</body>
</html>