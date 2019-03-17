<?php

session_start();
$_SESSION["username"]="nebojsa";

?>

<!DOCTYPE html>
<html>
    
<?php

echo "Vase korisnicki ime je: " . $_SESSION["username"] . " <br/>";
echo "Session name je: " . session_name() . "<br/>";
echo "Session ID je: "  . session_id() . "<br/>";

?>

    <a href="http://localhost/XI/session7.php?<?php echo SID ?>"> Link ka drugoj strani </a>
</html>
