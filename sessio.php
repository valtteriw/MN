<?php
//Aloitetaan istunto
session_start();
//määritetään istuntomuuttujat
$_SESSION["nimi"] = "Markus"
$_SESSION["auto"] = "Jopo";
?>

<?php
//aloitetaan istunto
$nimi = $_SESSION["nimi"];
$nimi = $_SESSION["auto"];
//tulostetaan tiedot
echo"{$nimi}"n auto on $auto";
?>