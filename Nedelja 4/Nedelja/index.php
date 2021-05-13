<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.green{
    color:green;
}
.red{
    color:red;
    }
</style>
</head>

<body>
    <?php
    $a=mt_rand(1,50);
    $b=mt_rand(1,50);
   
    if($a>$b){
        $color1="green";
        $color2="red";
        echo "<p><span style='color:green';>$a</span><br><span style='color:red';>$b</span>";

    }
    elseif($a<$b){
        $color1="red";
        $color2="green";
        echo "<p><span style='color:red';>$a</span><br><span style='color:green';>$b</span>";

    }
    else{
        $color1="blue";
        $color2="blue";
        echo "<p><span style='color:blue';>$a</span><br><span style='color:blue';>$b</span>";

    }
   echo "<p><span class='$color1';>$a</span><br><span class='$color2';>$b</span>";

    ?>
    <?php
    $broj1=mt_rand(1,10);
    $broj2=mt_rand(1,10);
    $broj3=mt_rand(1,10);
 
    echo "<br>";
    if($broj1>=$broj2&&$broj1>=$broj3){
        if($broj2>=$broj3){
            echo "<p>$broj3,$broj2,$broj1</p>";
        }
        else{            
            echo "<p>$broj2,$broj3,$broj1</p>";
        }
    }
    elseif($broj2>=$broj1&&$broj2>=$broj3){
        if($broj1>=$broj3){
            echo "<p>$broj3,$broj1,$broj2</p>";
        }
        else{            
            echo "<p>$broj1,$broj3,$broj2</p>";
        }
    }
    else{
        if($broj1>=$broj2){
            echo "<p>$broj2,$broj1,$broj3</p>";
        }
        else{            
            echo "<p>$broj1,$broj2,$broj3</p>";
        }
    }
    
    ?>
    <!-- <p><span class="<?=$color1?>";><?=$a?></span><br><span class="<?=$color2?>";><?=$b?></span> -->

</body>
</html>