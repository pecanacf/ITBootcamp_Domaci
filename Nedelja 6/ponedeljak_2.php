<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
    table, td{
        border:1px solid black;
        margin:0;
        border-spacing:0;
    }
    td{
        padding:10px;
        padding-left:3px;
        width:30px;
        height:30px;
    }
    .crna{
        background-color:black;
    }
 
</style>

<!-- Dat je slucajan broj od 1 do 64.
Napraviti tabelu 8x8. Sirina i visina svake celije je 30px i imaju border 1px. 
Celiji sa datim brojem postaviti crnu pozadinu. (preko klase ili inline style). 
Npr ako je broj 11, onda je celija u drugom redu i 3.koloni obojena crno. -->

<?php
$num=mt_rand(1,64);
//echo $num;
echo "<table>";
$zbir=0;
for($i=1;$i<=8;$i++){
    echo "<tr>";
    for($j=1;$j<=8;$j++){
        $zbir++;
        if($zbir==$num){
            echo "<td class='crna'> </td>";
        }
        else{
        echo "<td></td>";
    }
    }
    echo "</tr>";
}
echo "</table>";



?>

</body>
</html>