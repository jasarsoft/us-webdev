<?php
// ime kolacica
$cookie_name = "korisnik";
$cookie_value = "Marko Markovic";
// cookie istice za 30 dana - trenutno vreme + 86400sekundi*30
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 
    
?>

<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
    // proveravamo da li je cookie postavljen
    echo "Cookie pod nazivom: " . $cookie_name . " je postavljen";
} else {
    echo "Kolacic: " . $cookie_name . "je postavljen";
    echo "Vrednost je: " . $_COOKIE[$cookie_name];
}
?>

</body>
</html>

    