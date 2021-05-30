<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Zadaci:

Prikazati sve članove niza (preko ciklusa jedan po jedan)
Izračunati zbir svih članova niza
Izračunati proizvod svih članova niza
Koliko ima neparnih brojeva u nizu. 
Sabrati sve jednocifrene brojeve niza
Koliko ima brojeva koji su manji od svog indexa u nizu
Sabrati indekse onih brojeva koji su veći od oba svoja suseda -->
<?php
$zbir=0;
$proizvod=1;
$a=[5,15,8,30,3];
$k=count($a);
for($i=0;$i<$k;$i++){
 echo $a[$i]."<br>";
}
for($i=0;$i<$k;$i++){
    $zbir+=$a[$i];
}
echo $zbir."<br>";

for($i=0;$i<$k;$i++){
    $proizvod*=$a[$i];
}
echo $proizvod."<br>";

$counter_nepar=0;

for($i=0;$i<$k;$i++){
 if($a[$i]%2!=0){
     $counter_nepar++;
 }
}
echo $counter_nepar."<br>";

$zbir_jednocif=0;
for($i=0;$i<$k;$i++){
if($a[$i]<10){
$zbir_jednocif+=$a[$i];
}
}
echo $zbir_jednocif."<br>";
$counter_manjih=0;
for($i=0;$i<$k;$i++){
if($a[$i]<$i){
$counter_manjih++;
}
}
echo $counter_manjih;
$zbir_vecih=0;
//Sabrati indekse onih brojeva koji su veći od oba svoja suseda
for($i=1;$i<$k-1;$i++){
if($a[$i]>$a[$i+1]&&$a[$i]>$a[$i-1]){
$zbir_vecih+=$a[$i];
}
echo $zbir_vecih;
}

?>
</body>
</html>