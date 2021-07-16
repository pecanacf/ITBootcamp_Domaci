<?php
    session_start();
    unset($_SESSION['login_id']);
    setcookie('login_id', 0, time()-60*60*24, "/");
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Odjava</title>
    </head>
    <body>
    <style>
    
    body{
        height:100%;
    }
    
    .footer div{
        margin-top:100%;
    }
    .odjava {
        margin-top:5%;
        margin-bottom:10%;
    }

    </style>

<?php
    include("include/header.php");
    include ("include/body.php");
    include ("klasa_baza.php");
    include ("include/style.php");?>

<section id='odjavljeno'>
    <div class="podnaslov odjava">
        <h1 class="podnaslov_h1">USPEŠNO STE SE ODJAVILI</h1>
        <h5 class="podnaslov_podnaslov">Ukoliko želite možete se ponovo prijaviti ili nastaviti svoj boravak na sajtu neprijavljeni.</h5>
    </div>
</section>

<?php
    include ("include/footer.php");
?> 

</body>
</html>