<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- 2.	Napraviti niz od svih brojeva koji su veći od aritmetičke sredine niza (prosečne vrednosti).  -->
<body>
<?php
$niz=[3,5,7,11,15,2,10];
$zbir=0;
foreach($niz as $broj){
    $zbir+=$broj;
}
$aritmeticka_sredina=$zbir/count($niz);
$novi_niz=[];
foreach($niz as $indeks=>$broj){
    if($broj>$aritmeticka_sredina) array_push($novi_niz,$niz[$indeks]);
}
echo "Brojevi koji su veci od proseka niza su ".join(", ",$novi_niz)."<p>";
?>
</body>
</html>