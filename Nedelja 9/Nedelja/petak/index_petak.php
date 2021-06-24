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
include "agencija_klasa.php";
$putnici=$b->izvrsi_select("select*From putnici");
print_r ($putnici);
echo "<br>";
$destinacije=$b->prikazi_destinacije();
print_r ($destinacije);
echo "<br>";
$b->otkazi_rezervaciju(23);
echo "<br>";
$destinacije->prikazi_putnike();

?>
</body>
</html>