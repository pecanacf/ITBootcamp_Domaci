<?php
    session_start();
?>    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{

        height:100%;
    }
    .footer div{
        margin-top:100%;
    }
    #dugme_prijava{
        background-color: #1d3557;
    color: white;
    font-weight: bold;
    font-size: 20px;
    text-decoration: none;
    border-radius: 12px;
    padding: 10px;
    border: none;
    text-align: center;
    }
    #prijava_forma{
        padding:5%;
        text-align:center;
    }
    .podnaslov{
        margin-top:5%;
        margin-bottom:5%;
    }
   form span{
        color:#8d99ae;
    }

</style>
<body>
<?php
include ("include/header.php");
include ("include/body.php");

        if(!isset($_SESSION['login_id']) && !isset($_COOKIE['login_id'])){ ?>
          <section id=udomi_pondnaslov_i_slika>
        <div class="podnaslov">
            <h1 class="podnaslov_h1">PRIJAVITE SE</h1>
            <h5 class="podnaslov_podnaslov">Molimo unesite Vaše podatke i kliknite na dugme PRIJAVA.</h5>
        </div>
    </section>
            <form action="proveri_login.php" id='prijava_forma'>
                <input name="username" placeholder="Email">&nbsp
                <input name="password" placeholder="Šifra">&nbsp
                <input type="submit" value=" PRIJAVA " id="dugme_prijava"> <br/>
                <input type="checkbox" name="zapamti"> <span>Čekirajte polje ukoliko želite da ostanete ulogovani na ovom računaru</span>
            </form>
<?php   }else{
            echo "<h1>DOBRO DOŠLI</h1>";
            echo "<a href='logout.php'>LOG OUT</a>";
            echo "<a href='sled_strana.php'>SLEDECA STRANA</a>";
        }

include ("include/footer.php");
    ?>
    
</body>
</html>