<?php
require_once ("proizvod.php");
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
     <!-- 2.	Napraviti stranicu proizvodi.php koja pomocu gornje funkcije pravi 3 proizvoda po zelji (birajte naziv i sliku), ali su dva proizvoda
      sa popustom i jedan bez. 
 (ne mogu ciklusi, pozivate 3 puta funkciju) -->
 <?php
 div_creator("ruzne patike","ugly.jpg",300,90);
 echo "<br>";
 div_creator("fancy patike","fensi.jpg",200,10);
 echo "<br>";
 div_creator("sportske patike","sport.jfif",250,0);
 ?>
</body>
</html>