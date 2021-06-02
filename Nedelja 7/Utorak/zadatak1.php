<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- 1.	Napisati fju koja vraca true ako neki dati niz ne sadrzi nule, a u suprotnom vraca false. -->
<?php
function there_is_no_null($a){
foreach($a as $ind=>$elem){
    if($elem==0) return false;
}
return true;
}
$niz=[28,3,5,77,0];
if(there_is_no_null($niz)) echo "<p>Niz ".join(", ", $niz)." ne sadrzi 0</p>";
else echo "<p>Niz ".join(", ", $niz)." sadrzi 0</p>";
?>
</body>
</html>