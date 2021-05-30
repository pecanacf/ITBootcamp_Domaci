<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- 1.	Napisati fju koja za dati niz brojeva izracunava i prikazuje da li ima vise trocifrenih ili dvocifrenih brojeva. (koristiti for) -->
    <?php
    function is_more_even_odd($a){
        $k_neparnih=0;
        $k_parnih=0;
        $k=count($a);
        for($i=0;$i<$k;$i++){
            if($a[$i]%2==0) $k_parnih++;
            else $k_neparnih++;
        }
        if($k_neparnih>$k_parnih) echo "<p>Ima vise neparnih brojeva i to $k_neparnih</p>";
        else echo "<p>Ima vise parnih brojeva i to $k_parnih</p>";
    }
    $niz=[15,18,18,44,51,46];
    $more_numbers=is_more_even_odd($niz);
    echo $more_numbers;
    ?>
    <!-- 2.	Napisati fju koja za dati niz stringova pomocu fje "palindrom" (radjeno na casu) ispituje i prikazuje samo palindrome tog niza.
    Npr za niz ["potop", "buducnost", "lul", "nije"]  prikazuje reci "potop" i "lul". -->
    <?php

    echo "<br/>";
    function palindrom($str){

    foreach($str as $ind=>$elem){
        if($elem === strrev($elem))
            echo "<p>$elem</p>";
    }
    }
    $string=["lopta","potop","kuk","avion","oko"];
    $show_palindroms=palindrom($string);

    ?>
    <!-- 3.	Napisati fju koja od niza reči pravi html listu kao meni... 
    Npr.  ['Stavka 1', 'Stavka 2', …] pretvara u <ul><li>Stavka 1</li><li>Stavka 2</li>…</ul>.   -->
<style>
ul {
    list-style-type:none;
    padding:0;
}
li {
    display:inline;
    margin:5px;
    margin-left:0;
}
</style>
<?php
    function menu_creator($str){
    // $k=count($str);
    echo "<ul>";
    foreach($str as $ind=>$elem){
    echo "<li>$elem</li>";
    }
    echo "</ul>";
    }
$menu=["Stavka 1","Stavka 2","Stavka 3","Stavka 4","Stavka 5"];
menu_creator($menu);
?>
</body>
</html>