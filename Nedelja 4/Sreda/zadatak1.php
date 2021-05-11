<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak_1</title>
</head>
<body>
      <?php
    $broj_1=200;
    $broj_2=80;
    $zbir=$broj_1+$broj_2;
    $proizvod=$broj_1*$broj_2;
    $razlika=$broj_1-$broj_2;
    $kolicnik=$broj_1/$broj_2;

    echo $zbir;  echo "<br />";
    echo $proizvod;  echo "<br />";
    echo $razlika;  echo "<br />";
    echo $kolicnik;  echo "<br />";

    $a=4;
    $b=5;
    $c=8;
    $novizbir=$a+$b+$c;
   ?>
<div>Zbir brojeva <?=$a?>,<?=$b?> i <?=$c?> iznosi <?=$novizbir?></div>

</body>
</html>