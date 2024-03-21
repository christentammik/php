<?php
$kasutaja = "christen";
$dbserver = "localhost";
$andmebaas = "muusikapood";
$pw = "parool";

$yhendus = mysqli_connect($dbserver, $kasutaja, $pw, $andmebaas);

if (!$yhendus) {
    die("Ühendus ebaõnnestus: " . mysqli_connect_error());
}

?>