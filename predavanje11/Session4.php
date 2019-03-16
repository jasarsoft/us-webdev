<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// vrednosti promenljivih sesije se prepisuju, ako hocemo da promenimo vrednost
$_SESSION["favcolor"] = "yellow";
print_r($_SESSION);
?>

</body>
</html>