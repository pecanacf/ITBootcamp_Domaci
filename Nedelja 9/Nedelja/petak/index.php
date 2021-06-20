<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include "agencija_klasa.php";
$b = new TuristickaAgencija('turisticka_agencija');
$r=$b->izvrsi_select("select*putnici");
print_r($r);
/**
 * [
 *    ['id'=>1, 'knjiga'=>'najnovija', 'pisac'=>'neki pisac'],
 *    ['id'=>2, 'knjiga'=>'knjiga 2', 'pisac'=>'neki pisac'],
 *    ['id'=>10, 'knjiga'=>'Orlovi rano lete', 'pisac'=>'neki pisac'],
 *    ...
 * ]
 */

?>
</body>
</html>