<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- 2.	Napisati fju koja za dati niz koji predstavlja kolika je uspesnost uradjenih domacih po danima ['ponedeljak'=>27, 'utorak'=>29, 'cetvrtak'=>28,
 'petak=>28] pronalazi:
-	Koji dan je najuspesniji
-	Kolika je prosecna uspesnost
-	Razliku izmedju najbolje i najgore uspesnosti -->
<?php
function success_rate(){
$niz=['ponedeljak'=>27, 'utorak'=>29, 'cetvrtak'=>28,'petak'=>28];
$najuspesniji=$niz['ponedeljak'];
foreach($niz as $dan=>$broj_uradjenih_domacih){
    if($broj_uradjenih_domacih>$najuspesniji){
        $najuspesniji=$broj_uradjenih_domacih;
        $najuspesniji_dan=$dan;
    }
}
echo "<p>Najuspesniji dan je $najuspesniji_dan</p>";
$zbir_domacih=0;
foreach($niz as $dan=>$broj_uradjenih_domacih) $zbir_domacih+=$broj_uradjenih_domacih;
echo "<p>Prosecna uspesnost uradjenih domacih zadataka je ".$zbir_domacih/count($niz)." domacih po danu</p>";
$najneuspesniji=$niz['ponedeljak'];
foreach($niz as $dan=>$broj_uradjenih_domacih){
    if($broj_uradjenih_domacih<$najneuspesniji){
        $najneuspesniji=$broj_uradjenih_domacih;
    }
}
echo "<p>Razlika izmedju najbolje uspesnosti($najuspesniji domacih) i najgore uspesnosti($najneuspesniji domacih) iznosi ".$najuspesniji-$najneuspesniji." domaca</p>";
}
success_rate();
?>
</body>
</html>