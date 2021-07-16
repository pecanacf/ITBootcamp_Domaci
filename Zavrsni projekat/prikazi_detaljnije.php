<?php
    session_start();
?>    
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Prikazi ljubimca</title>
</head>
<style>
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
include ("klasa_baza.php");
include ("include/style.php");

if(!isset($_SESSION['login_id']) && !isset($_COOKIE['login_id'])){ ?>
    <section id=udomi_pondnaslov_i_slika>
        <div class="podnaslov">
            <h1 class="podnaslov_h1">SAMO PRIJAVLJENI KORISNICI IMAJU PRISTUP OVOJ STRANICI</h1>
            <h5 class="podnaslov_podnaslov">Molimo unesite Vaše podatke i kliknite na dugme PRIJAVA.</h5>
        </div>
</section>
        <form action="proveri_login.php" id='prijava_forma'>
            <input name="username" placeholder="Email">&nbsp
            <input name="password" placeholder="Šifra">&nbsp
            <input type="submit" value=" PRIJAVA " id="dugme_prijava"> <br/>
            <input type="checkbox" name="zapamti"> <span>Čekirajte polje ukoliko želite da ostanete ulogovani na ovom računaru</span>
        </form>
<?php   }
    else{
        $ime=$_GET['ime'];
        $s=$b->prikazi_detalje($ime);
        $brojac=0;
        echo "<style>";
        for($i=2;$i<=4;$i++){
            echo ".div$i{
                background-image:url('".$s[$brojac]['slika']."');}";
            $brojac++;
            }
        echo "</style>";
?>
        <h5 class="podnaslov_podnaslov" id="detaljnije">Na ovoj stranici možete pronaći više informacija o odabranom ljubimcu.</h5>
<?php
        echo "<div class='parent2' id='parent2'>";
        echo "<div class='div1' id='div_samo_1'>";
        echo "<p><h1 class='podnaslov_h1'>$ime</h1>".$s[0]['uzrast'].", ".$s[0]['grad']."<br><br> <span class='span_istaknuto'> &nbsp VOLI &nbsp  </span> <br>".$s[0]['voli']."<br><br><span class='span_istaknuto'>&nbsp  NE VOLI &nbsp </span><br>".$s[0]['ne_voli']."</p>
                <button> <a href='kontakt.php'>UDOMI ME</a></button></div>";
        echo "<div class='div2'id='div_samo_2'></div>";
        echo "<div class='div3'id='div_samo_3'></div>";
        echo "<div class='div4'id='div_samo_4'></div>";
        echo "</div>";
}

    include ("include/footer.php");
?>

</body>
</html>