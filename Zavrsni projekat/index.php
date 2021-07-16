<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Početna strana</title>
</head>
<style>
    #pocetna {
        background-color: #457b9d;
        color: white;
    }
    #button{
        margin:0;
        }
    body{
        overflow-x:hidden;
        }

</style>
<body>
    <?php
    include ("include/header.php");
    include ("include/body.php");
    ?>

    <div id="pocetna_slika">
        <p><span id="podnaslov">Pronađite svog idealnog ljubimca</span><br><span id="podrecenica"> &nbspTrenutno u bazi imamo preko 50 ljubimaca koji jedva čekaju da te upoznaju &nbsp</span></p>
        <br><button class="button" id='button'><a href="udomi_ljubimca.php">UDOMI ODMAH</a></button>
    </div>

    <div class="ispod_main_slike">
        <div class=div_slika1>
            <p class="u_divu">
                Saznajte više o našoj organizaciji, ciljevima i vrednostima koje živimo. <br><button class="button_mali"><a href="o_nama.php">O NAMA</a></button>
            </p>
        </div>
        <div class=div_slika2>
            <p class="u_divu">
                Pogledajte fotografije ljubimaca kojima smo pronašli novu porodicu. <br><button class="button_mali"><a href="galerija.php">GALERIJA</a></button>
            </p>
        </div>
        <div class=div_slika3>
            <p class="u_divu">Ukoliko imate pitanja, pišite nam za sve dodatne informacije.<br><button class="button_mali"><a href="kontakt.php">KONTAKT</a></button>
            </p>
        </div>  
    </div>

    <?php
    include ("include/footer.php");
    ?>
</body>

</html>