<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Napraviti funkciju koja pravi i vraca niz sa 10 clanova od 10 slucajnih brojeva od 20-80 preko for naredbe.

Napraviti funkciju koja za dati niz proverava i prikazuje da li ima više parnih ili neparnih brojeva.

Napraviti funkciju koja za dati niz sabira sve brojeve čija je poslednja cifra trojka.

Napraviti funkciju koja za dati niz pravi tabelu od 2 kolone, prva kolona su indexi, a druga kolona su brojevi. Npr: 
	1   10
	2    6 
	.... -->

<?php
function niz1() {
    $y = [];
    for ($i = 0; $i < 10; $i++) {
        $y[$i] = mt_rand(20, 80);
    }
    return $y;
}
$niz=niz1();

print_r($niz);
function vise_par_nepar($a){
    $broj_parnih=0;
    $broj_neparnih=0;
    foreach($a as $ind=>$element){
        if($element%2==0)
            $broj_parnih++;
        else
            $broj_neparnih++;
    }
    if($broj_parnih>$broj_neparnih)
        echo "Veci je broj parnih brojeva u ovom nizu";
    
    else
        echo "Veci je broj neparnih brojeva u ovom nizu";
}
vise_par_nepar($niz);
function pravi_tabelu($a){
    echo "<table border=1>";
    foreach($a as $ind=>$element){
        echo "<tr><td>$ind</td><td>$element</td></tr>";
    }
}
pravi_tabelu($niz);
?>
<!-- Napraviti funkciju koja za dati niz pravi tabelu od 2 kolone, prva kolona su indexi, a druga kolona su brojevi. Npr: 
	1   10
	2    6 
	.... -->



<!-- Napraviti funkciju koja za dati niz proverava i prikazuje da li ima više parnih ili neparnih brojeva. -->

</body>
</html>