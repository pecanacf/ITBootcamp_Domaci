<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$ime=(isset($_GET["ime"]))? $_GET['ime'] : "";
$prezime=(isset($_GET["prezime"]))? $_GET['prezime'] : "";

$ime_inic=substr($ime,0,1);
$prezime_inic=substr($prezime,0,1);

echo "<p>$ime_inic.$prezime_inic.</p>";

$ime_prezime=(isset($_GET["licniPodaci"]))? $_GET['licniPodaci'] : "";
$ime_slovo1=substr($ime_prezime,0,1);
$poz_razmak=strpos($ime_prezime," ");
$prezime_slovo1=substr($ime_prezime,$poz_razmak+1,1);

echo "<p>$ime_slovo1.$prezime_slovo1.</p>"
?>


    <!-- Napraviti formu koja u jednom inputu prihvata ime i prezime razdvojene razmakom. 
    Posle slanja forme, prikazati inicijale u obliku I.P. (sad saljem sa uputstvom 😊
     za prvo slovo - je lako, za drugo slovo - nadjite poziciju razmaka preko strpos,
     a onda preko substr uzmete slovo na sledecoj poziciji) -->
</body>
</html>