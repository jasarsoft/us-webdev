<?php
// kreiranje sesije
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// definisanje promenljivih sesije
$_SESSION["omiljenaboja"] = "plava";
$_SESSION["omiljenazivotinja"] = "pas";
echo "promenljive sesije su definisane.";
?>

</body>
</html>
