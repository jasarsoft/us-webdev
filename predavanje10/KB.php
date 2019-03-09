<?php

// kreiranje i brisanje baza

$user='nebojsa';
$password='sifra';
$db='sii';
$host='localhost';

// kreiranje baze podataka sii2 pomocu klase
$link=new mysqli($host,$user,$password) or die();
echo "konektovani smo <br/>";
$sql='CREATE DATABASE IF NOT EXISTS sii2 DEFAULT COLLATE utf8_general_ci';
$link->query($sql) or die();
echo "baza je kreirana <br/>";

// kreiranje baze podataka sii3 pomocu funkcije

$link=mysqli_connect($host,$user,$password) or die();
echo "konektovani smo <br/>";
$sql='CREATE DATABASE IF NOT EXISTS sii3 DEFAULT COLLATE utf8_general_ci';
mysqli_query($link,$sql) or die();
echo "baza je napravljena<br/>";

// BRISANJE BAZA
$sql='DROP DATABASE sii2';
mysqli_query($link,$sql) or die();
echo "baza sii2 je obrisana <br/>";
$sql='DROP DATABASE sii3';
mysqli_query($link,$sql) or die();
echo "baza sii3 je obrisana <br/>";
?>