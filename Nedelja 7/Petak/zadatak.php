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
$x = [ 
 ['ime'=>"Dragana", "godine"=>32, "grad"=>"Nis", "pozicija"=>"programer"],
 ['ime'=>"Ivana", "godine"=>20, "grad"=>"Bg", "pozicija"=>"dizajner"],
 ['ime'=>"Sinisa", "godine"=>25, "grad"=>"NS", "pozicija"=>"menadzer"],
 ['ime'=>"Stojan", "godine"=>50, "grad"=>"NS", "pozicija"=>"programer"]
];
$x = array_map(function($osoba){
    $osoba['godine_staza'] = mt_rand(1, 3);
    return $osoba;
}, $x);
print_r($x);
uasort($x, function($a,$b){
    if($a['godine_staza'] > $b['godine_staza'])
        return -1;
    else
        return 1;
});
echo "<br>";
print_r ($x);
echo "<br>";



// $maks_niz = array_filter($x, function($osoba){
//     $maksimalna_vrednost=0;
//         if($osoba['godine_staza']>$maksimalna_vrednost){
//             $maksimalna_vrednost=$osoba['godine_staza'];
//         }

//         if($osoba['godine_staza'] === $maksimalna_vrednost)
//             return true;
//         else 
//             return false;

// });

// echo "Maks niz je";
// print_r($maks_niz);
$b = array();
for($i=0; $i < count($x); $i++){
   $b[$i] = $x[$i]['godine_staza'];
}
$najveci =  max($b);
$max_radni_staz = array_filter($x, function($osoba){
    global $najveci;
    if($osoba['godine_staza'] == $najveci){
       return true;
    }else {
        return false;
    }
 });
 print_r($max_radni_staz);

?>
 

</body>
</html>