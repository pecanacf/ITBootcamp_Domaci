<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Od niza zadatih reči, napraviti niz čiji će svaki element predstavljati span. Svaki span će imati klasu "crveni", "zeleni"
 u zavisnosti od toga da li je reč kraća ili duža od 5 slova. Prikazati dobijeni niz. -->
<style>
.crveni{
    color:red;
}
.zeleni{
    color:green;
}
</style>
<?php
$niz=['autobus','konj','slon','kola','motocikl'];
foreach($niz as $rec){
    if(strlen($rec)<5) echo "<span class='crveni'>$rec</span><br>";
    if(strlen($rec)>5) echo "<span class='zeleni'>$rec</span><br>";
}



?>
</body>
</html>