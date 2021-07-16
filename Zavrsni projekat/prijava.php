<?php
    session_start();
?>    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prijava</title>
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
    #prijavljen_poruka{
        text-align:center;
        margin-bottom:10%;
        margin-top:9%;
    }
    .odjava_skroz{
        background-color: #1d3557;
    color: white;
    font-weight: bold;
    font-size: 20px;
    text-decoration: none;
    border-radius: 12px;
    padding: 8px;
    border: none;
    text-align: center;
    margin-bottom:5%;
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
            echo "<div id='prijavljen_poruka'>";
            echo "<h1 class='podnaslov_h1'>Poštovani, već ste prijavljeni na našem sajtu.</h1><br><br>"; 
            echo "<h5 class='podnaslov_podnaslov'>Možete se odjaviti ili posetiti neku od drugih naših stranica</h5><br><br>";
            echo "<br><a href='logout.php' class='odjava_skroz'>LOGOUT</a>";
            echo "</div>";        
        }

include ("include/footer.php");
?>
    
</body>
</html>