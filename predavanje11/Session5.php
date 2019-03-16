<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// brisanje vrednosti svih promenljivih sesije
session_unset(); 

// brisanje sesije
session_destroy(); 
?>

</body>
</html>