<?php
include "klasa_baza.php";

// $m=$b->daj_sliku_ljubimca(4);
// $f=implode("",$m);
// echo "<img src=".$f." alt='SLIKA'>";
$s=$b->daj_ljubimca_detaljnije(100);
print_r ($s);
if($r['uspesno'] == true){
    echo "<div class='parent'>";
     echo "<div class='div1'>";
     echo "<p><".$r['niz'][0]['ime'];
     echo "<br>".$r['niz'][0]['uzrast'].", ".$r['niz'][0]['grad']."<br>".$r['niz'][0]['voli']."<br>".$r['niz'][0]['ne_voli']."</p></div>";
     echo "<div class='div2'></div>";
     echo "<div class='div3'></div>";
     echo "<div class='div3'></div>";
     echo "</div>";
     return $r['niz'];
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href=""></a>
    
</body>
</html>