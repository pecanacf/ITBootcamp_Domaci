<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Napravitabelu 3x4 u kojoj pise:  
3tr 4 td
redovi za 2 / 2,4,6
kolone za 3 / 3,6,9-->
<style>
    table, td{
        border:1px solid black;
        margin:0;
        border-spacing:0;
    }
    td{
        padding:10px;
        padding-left:3px;
    }
 
</style>
<?php
echo "<table>";
for($i=2;$i<=6;$i+=2){
echo    "<tr>";
    for($j=3;$j<=12;$j+=3){
    echo "<td>$i-$j</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>

</body>
</html>