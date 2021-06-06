<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- 1.	Dodati u gornji niz jos 4 osobe po zelji. -->
<!-- 2.	Napisati fju koja prikazuje imena svih programera. 
3.	Napisati fju koja prikazuje sve podatke neke date osobe. Pozivajuci tu funkciju prikazati sve osobe cije ime sadrzi slovo s.-->
<?php
$x = [ 
 ['ime'=>"Dragana", "godine"=>32, "grad"=>"Nis", "pozicija"=>"programer"],
 ['ime'=>"Ivana", "godine"=>20, "grad"=>"Bg", "pozicija"=>"dizajner"],
 ['ime'=>"Sinisa", "godine"=>25, "grad"=>"NS", "pozicija"=>"menadzer"],
 ['ime'=>"Stojan", "godine"=>50, "grad"=>"NS", "pozicija"=>"programer"],
 ['ime'=>"Nikola", "godine"=>18, "grad"=>"Nis", "pozicija"=>"programer"],
 ['ime'=>"Jelena", "godine"=>40, "grad"=>"Bg", "pozicija"=>"dizajner"],
 ['ime'=>"Petar", "godine"=>26, "grad"=>"NS", "pozicija"=>"menadzer"],
 ['ime'=>"Jasmina", "godine"=>65, "grad"=>"NS", "pozicija"=>"programer"]
];
// print_r($x);
function show_programers($x,$a){
    $brojac=1;
    for($i=0;$i<count($x);$i++){
        if($a===$x[$i]['pozicija']){
            echo "<p>Programer broj $brojac je ".$x[$i]['ime']."</p>";
            $brojac++;
        }
    }
}
show_programers($x,"programer");

function show_all_data($x,$a){
    for($i=0;$i<count($x);$i++){
        if($a===$x[$i]['ime']){
            //print_r($x[$i]);
            echo "<p>Podaci osobe su ".join(", ", $x[$i])."</p>";
        }
    }
}
for($i=0;$i<count($x);$i++){
    if(stripos($x[$i]['ime'],"s")===false) continue;
    show_all_data($x,$x[$i]['ime']);
    }
?>
</body>
</html>