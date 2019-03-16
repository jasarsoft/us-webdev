<?php
setcookie("test_cookie", "test", time() + 3600, '/');
?>
<html>
<body>

<?php
if(count($_COOKIE) > 0) {
    echo "Kolacici su omoguceni";
    echo "<br/> Broj kolacica je: " . count($_COOKIE);
} else {
    echo "Kolacici su onemoguceni";
}
?>

</body>
</html>