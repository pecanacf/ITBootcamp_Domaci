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
    
    function zbirovi(){

    $broj1=(isset($_GET['broj1']))? $_GET['broj1'] : "";
    $broj2=(isset($_GET['broj2']))? $_GET['broj2'] : "";
    $broj3=(isset($_GET['broj3']))? $_GET['broj3'] : "";
    $broj4=(isset($_GET['broj4']))? $_GET['broj4'] : "";
    $zbir1=0;
    $zbir2=0;
    if($broj2>$broj1&&$broj4>$broj3){
        for($i=$broj1;$i<=$broj2;$i++){
            if($i%4==0){
            $zbir1+=$i;
            }
        }
        for($i=$broj3;$i<=$broj4;$i++){
            if($i%3==0){
                $zbir2+=$i;
            }
        }
    }
    if($zbir1>$zbir2){
        echo "<p>Veci je prvi zbir i on iznosi $zbir1</p>";
    }
    if($zbir1<$zbir2){
        echo "<p>Veci je drugi zbir i on iznosi $zbir2</p>";
    }
    }
    zbirovi();
    ?>
    <!-- Ako je uslov ispunjen, izračunati 
zbir onih brojeva od prvog do drugog koji su deljivi sa 4, 
pa zbir onih brojeva od trećeg do četvrtog koji su deljivi sa 3. 
Prikazati koji je zbir veći. -->

</body>
</html>