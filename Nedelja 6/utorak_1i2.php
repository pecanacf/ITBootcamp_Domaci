<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Написати функцију која враћа већи од 3 броја (3 броја су прослеђени функцији кроз параметре) -->

<?php
function biggest_number($a,$b,$c){
    if($a>=$b&&$a>=$c) return $a;
    elseif($b>=$a&&$b>=$c) return $b;
    else return $c;
    }
echo biggest_number(15,60,90);

?>
 <!-- Написати функцију која враћа div унутар којег се налази N span елемената који за текст имају
редом бројеве од 1 до N -->

<?php
function create_spans($n){
$div="";    
$div.="<div>";
for($i=1;$i<=$n;$i++){
    $div.="<span>$i</span><br>";
}
$div.="</div>";
return $div;
}


echo create_spans(12);
?>
<!-- . Бонус задатак Написати функцију која враћа N div елемената који имају M span елемената,
који имају текст од 1 до M -->


</body>
</html>