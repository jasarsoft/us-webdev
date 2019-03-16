<?php 



$autorizovan = FALSE;
if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])) 
{$sifLoz = file("sifrovaneLozinke.txt");

if (in_array($_SERVER['PHP_AUTH_USER'].":"
.md5($_SERVER['PHP_AUTH_PW'])."\n", $sifLoz))
$autorizovan = TRUE;}

if (! $autorizovan) {
header('WWW-Authenticate: Basic Realm');
header('HTTP/1.0 401 Neautorizovan');
/* Ako korisnik ukuca Cancel dobija se sledeće */
print('Morate dati ispravne login podatke!');
exit;}
echo "Materijal sa restrikcijama ..."
?>
