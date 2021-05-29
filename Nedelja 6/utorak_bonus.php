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
function create_divs($n,$m){
    $div="";
    for($i=1;$i<=$n;$i++){
    $div.= "<div>";
        for($j=1;$j<=$m;$j++){
        $div.= "<span>$j</span><br>";
        }
    $div.="</div>";
    }
    return $div;
}
$div_creator=create_divs(8,4);
echo $div_creator;
?>
</body>
</html>