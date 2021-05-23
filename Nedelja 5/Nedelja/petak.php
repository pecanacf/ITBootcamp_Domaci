<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!-- Ispisati brojeve od 20 do 1 preko while ciklusa. -->
<?php
$i=20;
while($i>=1){
    echo "$i<br>";
    $i--;
}
?>
<!-- Množiti sve brojeve od 30 ka 1, sve dok proizvod ne predje 100.000. 
Prikazati konacan rezultat crvenom bojom a poslednje pomnozeni broj - zelenom. -->
<?php
$i=30;
$proizvod=1;
$final_proizvod=1;
while($proizvod<=100000){
    $final_proizvod=$proizvod;
    $proizvod*=$i;    
    $i--;
}
echo "<br><span style=color:red>Proizvod pre poslednjeg mnozenja iznosi $final_proizvod</span><br>";
echo "<span style=color:green>Poslednje pomnozeni broj iznosi $i</span><br>";
echo "<span>Proizvod posle poslednjeg mnozenja iznosi $proizvod</span>";

?>
<!-- Prikazati brojeve od 30 do 99, ali preskociti sve one cija je prva cifra deljiva sa 3, ili je druga cifra deljiva sa 4. -->
<?php
$broj=30;
while($broj<=99){
    if(substr($broj,0,1)==3 || substr($broj,0,1)==6 || substr($broj,0,1)==9 || substr($broj,1,1)==4 || substr($broj,1,1)==8){
        $broj++;
        continue;
    }
    echo "<br>$broj";
    $broj++;
}
?>
</body>
</html>