<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O nama</title>
</head>
<style>
    #o_nama {
        background-color: #457b9d;
        color: white;
    }

    .udomi_slika {
        padding: 0;
        margin: 0;
        height: 450px;
        width: 100%;
        background-image: url("slike/udomi_naslovna.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        margin-top: 12px;
        overflow: hidden;
    }

    .udomi_slika p {
        text-align: right;
        /* border: 2px solid #8d99ae; */
        width: 33%;
        margin-left: 65%;
        height: 41%;
        vertical-align: center;
        margin-top: 3%;
        border-radius: 12px;
        /* background-color: #8d99ae40; */
        margin-right: 5%;
        padding: 10px;
        font-size: 2em;
        font-family: 'Poppins', sans-serif;
        color: white;
        font-weight: bolder;
        padding-right: 1%;
    }

    .udomi_slika span {
        background-color: white;
        border-radius: 6px;
        color: #1d3557;
        line-height: 2em;
    }

    .udomi_slika .neistaknuto {
        color: #6c757d;
    }

    .h1_podnaslov {
        text-align: center;
        margin-top: 2%;
        margin-bottom: 2%;
        margin-left: 0;
        margin-right: 0;
        font-size: 2.2em;
        font-family: 'Poppins', sans-serif;
        color: #e63946;
    }

    .podnaslov_h1,
    .h1_podnaslov {
        color: #e63946 !important;
    }

    #section_o_nama {
        height: 100%;
        width: 100%;
        /* display: table; */
        text-align: center;
        /* padding-left: 100px; */
        font-size: 1.2em;
        color: #1d3557;

    }


    /* #div_ko_smo {
        /* display: table-cell;

        height: 100%;
        vertical-align: middle; */
    /* margin: auto;
        width: 60%;
        border: 5px solid #FFFF00;
        padding: 10px; */

    /* } */
    #section_o_nama .span_istaknuto {
        background-color: #1d3557;
        color: white;
        font-weight: bold;
        border-radius: 3px;
        font-size: 1.2em;
    }
</style>

<body>
    <?php
include ("include/header.php");
include ("include/body.php");
include ("include/style.php");
?>

    <div class="udomi_slika">
        <p> <span class="neistaknuto"><span class="istaknuto"> &nbsp 200+</span> &nbsp udomljenih ljubimaca
                &nbsp</span><br>
            <span class="neistaknuto"><span class="istaknuto">&nbsp 5</span> &nbsp godina postojanja &nbsp</span><br>
            <span class="neistaknuto"><span class="istaknuto">&nbsp 3</span> &nbsp zajednička cilja &nbsp</span><br>
        </p>
    </div>
    <section id='section_o_nama'>
        <h1 class="podnaslov_h1 h1_podnaslov">KO SMO MI?</h1>
        <div id="div_ko_smo">
            Nevladina, neprofitna organizacija <span class="span_istaknuto">&nbsp "Mačka u džaku" &nbsp </span> kreirana
            je
            <br> sa željom da se povežu ljubitelji životinja sa ljubimcima kojima je potreban dom. <br><br>
            Tokom uspešnih <span class="span_istaknuto"> &nbsp 5 godina postojanja &nbsp</span> pomogli smo u
            udomljavanju više od <span class="span_istaknuto">&nbsp 200 ljubimaca &nbsp</span><br>
            čije nam fotografije zadovoljni vlasnici redovno šalju. <br><br>
            Saradjujemo se <span class="span_istaknuto">&nbsp preko 20 prihvatilista &nbsp</span> za zivotinje na
            različitim
            lokacijama širom naše zemlje. <br> Isto tako,
            veliki
            broj ljubimaca koje možete pronaći na našem sajtu, se nalaze na privremenom čuvanju <br> kod osoba koje su
            ih
            pronašle i čekaju da budu trajno udomljene. <br>
        </div>
        <h1 class="podnaslov_h1 h1_podnaslov">NAŠI CILJEVI</h1>
        U poslovanju se vodimo našim ključnim ciljevima uz uverenje da <br> ćemo njihovim ostvarenjem doprineti
        poboljšanju
        položaja životinja koje nemaju svoj dom: <br><br>

        <span class="span_istaknuto">&nbsp OSVEŠĆIVANJE DRUŠTVA &nbsp</span> <br> o broju napuštenih životinja koje su
        raspoložive za
        udomljavanje <br><br>
        <span class="span_istaknuto">&nbsp MAPIRANJE I EDUKACIJA &nbsp</span> <br> društva o koracima prilikom procesa i
        donošenja
        odluke o udomljavanju <br><br>
        <span class="span_istaknuto">&nbsp PRUŽANJE NEGUJUĆEG OKRUŽENJA &nbsp</span> <br> punog ljubavi napuštenim
        životinjama, kao i
        podrške nakon procesa
        udomvljavanja</span> <br><br>

    </section>
    <?php
    include ("include/footer.php");
?>
</body>

</html>