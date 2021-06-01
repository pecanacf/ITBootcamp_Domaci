<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- 3.	a) Napisati funkciju koja ucitava niz iz forme iz inputa. Sve brojeve u inputu razdvojiti razmakom. Fja vraca ucitani niz  -->
<?php
function array_return($a){
    $niz=$_GET[$a];
    $novi_niz=explode(' ', $niz);
    return $novi_niz;
}
$ucitani_niz=array_return('brojevi');
echo "<p>Ucitani niz je ".join(", ", $ucitani_niz)."</p>";
?>
<!-- b) Napisati funkciju koja ispituje i vraca da li neki dati niz X ima bar 3 parna broja.-->
<?php
function min_three_numbers_even($x){
    $counter=0;
    foreach($x as $ind=>$elem){
        if($counter>=3) return true;
        if($elem%2==0) $counter++;
    }
    return false;
}
$niz=[5,4,3,6,5,9];
if(min_three_numbers_even($niz)) echo "<p>Ovaj niz ima minimum 3 parna broja</p>";
else echo "<p>Ovaj niz ima manje od 3 parna broja</p>";
?>
<!--c) Napisati funkciju koja ispituje i vraca da li neki dati niz ima sve brojeve manje od 1000.-->
<?php
function all_under_thousand($x){
    foreach($x as $ind=>$elem){
        if($elem>=1000) return false;
    }
    return true;
}
$niz2=[500,450,300,600,50,899];
if(all_under_thousand($niz2)) echo "<p>Ovaj niz ima sve brojeve manje od 1000</p>";
else echo "<p>Ovaj niz nema sve brojeve manje od 1000</p>";
?>
<!-- d) Pomocu gornjih funkcija za niz dobijen iz inputa ispitati i prikazati da li taj niz ima sve brojeve manje od 1000 i bar 3 parna. -->
<?php
$niz_velikih_brojeva=array_return('veliki_brojevi');
echo "<p>Ucitani niz je ".join(", ", $niz_velikih_brojeva)."</p>";
if(all_under_thousand($niz_velikih_brojeva)) echo "<p>Ovaj niz ima sve brojeve manje od 1000</p>";
else echo "<p>Ovaj niz nema sve brojeve manje od 1000</p>";
if(min_three_numbers_even($niz_velikih_brojeva)) echo "<p>Ovaj niz ima minimum 3 parna broja</p>";
else echo "<p>Ovaj niz ima manje od 3 parna broja</p>";

//mnogo mi se stvari koje se echo-uju ponavlja, ali zadaci kazu da f-je treba da vracaju, a ne i da prikazuju, pa sam zato dodavao echo nakon izvrsene fje, a ne u njoj samoj. Takodje, ja sam 2 dokumenta sa formama linkovao na ovaj dokument, pa se onda automatski kada se posalju vrednosti iz jedne forme, ne prikazuje nista po pitanju druge, sto je i logicno.
?>
</body>
</html>