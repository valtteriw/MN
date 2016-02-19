<?php
//luo evästeen nimi, jonka arvo on Juho
setcookie("nimi", "Juho");
//tämä eväste on voimassa seuraavat 10 minuuttia
setcookie("auto", "Honda", time() + 60 * 10);
?>

<?php
//haetaan aikaisemmassa esimerkissä luodut evästeet muuttujiin
$nimi = $_COOKIE["nimi"];
$auto = $_COOKIE["auto"];
//tulostetaan evästeiden tiedot
echo"{$nimi}"n auto on $auto";
?>