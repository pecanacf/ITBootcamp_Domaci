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
    function paragraf(){
        $ime="Filip";
        $prezime="Pecanac";
        $ime_prezime=$ime.$prezime;
        $ime_prezime=strlen($ime_prezime);
        echo "<p><span>$ime</span> <span>$prezime</span></p>";
        return $ime_prezime;
    }
   $spojeno=paragraf();

    for($i=1;$i<$spojeno;$i++){
    paragraf();
    }

    $n=mt_rand(1,10);
    $x=mt_rand(1,10);
    echo "$n $x <br>";
    function spanovi(){
        global $n,$x;
        for($i=1;$i<=$n;$i++){
            echo "<span>Ovo je span $i</span><br>";
        }
    }
    spanovi();
    for($i=1;$i<=$x;$i++)
    echo "<div>";
    spanovi();
    echo "</div>";
    ?>
</body>
</html>