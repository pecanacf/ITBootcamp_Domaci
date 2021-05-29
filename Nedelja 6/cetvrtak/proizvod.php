<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    div{
        width:200px;
        display:inline-block;
    }
    img{
        width:200px;
        height:200px;
    }
    .red{
        color:red;
    }
    .green{
        color:green;
    }
    </style>
</head>
<body>
<!-- 1.	Napraviti fajl proizvod.php koji sadrzi samo jednu funkciju koja za dato ime proizvoda, sliku, cenu i popust pravi div  (echo 😊)
za prikaz svih podataka.
Div za proizvod ce biti sirine 200px, display inline-block ili float left, a sadrzi sliku (dimenzije 200x200), ispod toga naziv, ispod toga cena.
Ako je popust veci od 0, cena je obojena crveno, a prikazana je i cena sa popustom u zelenoj boji.
Ako je popust 0, prikazana je samo prava cena.
CSS nemojte inline, ali moze style u istom fajlu ako vam je lakse. -->

 <?php
function div_creator($naziv,$slika,$cena,$popust){
    if($popust>0) echo "<div><img src='$slika'/><br>$naziv<br><span class='red'>$cena</span><br><span class='green'>".$cena-($cena*$popust/100)."</span></div>";
    else echo "<div><img src='$slika'/><br>$naziv<br><span>$cena</span></div>";   
}
div_creator("Patike","sneakers.jfif",150,50);
echo "<br>";
 ?>
 <!-- 2.	Napraviti stranicu proizvodi.php koja pomocu gornje funkcije pravi 3 proizvoda po zelji (birajte naziv i sliku), ali su dva proizvoda sa popustom i jedan bez. 
 (ne mogu ciklusi, pozivate 3 puta funkciju) -->
</body>
</html>